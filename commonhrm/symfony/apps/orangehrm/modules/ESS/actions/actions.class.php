<?php

/**
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
 * all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA  02110-1301, USA
 */
/**
 * Actions class for ESS module
 *
 *-------------------------------------------------------------------------------------------------------
 *  Author    - Jayanath Liyanage
 *  On (Date) - 27 July 2011 
 *  Comments  - ESS main functions
 *  Version   - Version 1.0
 * -------------------------------------------------------------------------------------------------------
**/

include ('../../lib/common/LocaleUtil.php');
class ESSActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->getUser()->setCulture($_SESSION['language']);
        if (strlen($request->getParameter('empNumber'))) {

            $empNumber = $request->getParameter('empNumber');

            $_SESSION['PIM_EMPID'] = $empNumber;
        } elseif (strlen($_SESSION['PIM_EMPID'])) {
            
        } else {
            if (strlen($_SESSION['empNumber'])) {
                $_SESSION['PIM_EMPID'] = $_SESSION['empNumber'];
            }
        }

        $noticeDao = new NoticeDao();
        $this->today =  $today = date("Y-m-d");
        $this->notices = $noticeDao->getAllNotice($today);
        
        if ($_SESSION['user'] == "USR001") {
            $this->redirect('pim/list');
        }

        $this->Culture = $this->getUser()->getCulture();
        $employee = $_SESSION['empNumber'];
        $ESSDao = new ESSDao();
        /* make LDAP user session */
        $this->EmployeeReadForLdap = $ESSDao->readEmployee($_SESSION['PIM_EMPID']);
        if(!$this->EmployeeReadForLdap){
          $this->redirect('default/PermissionDenind');
        }

        $EmployeeData = $this->EmployeeReadForLdap;
        $_SESSION['LDAP_USERID']=$EmployeeData->employeeId;
        
        /* end */
        $this->Employee = $ESSDao->readEmployee($employee);
       
       /*WorkFlow */
        try{
        if($_SESSION['user']=="USR001"){
            throw new Exception("Invalid File Type", 200);
                              
        }else{
        $wfDao = new workflowDao();
        $approvingEmpID=$_SESSION['empNumber'];
        $this->apSummary = $wfDao->applicationSummary($approvingEmpID);
        $this->culture = $this->getUser()->getCulture();
        }
        }
        catch(sfStopException $sf){
            
        }
        catch (Doctrine_Connection_Exception $e) {
                
                $errMsg = new CommonException($e->getPortableMessage(), $e->getPortableCode());
                $this->setMessage('WARNING', $errMsg->display());
                $this->redirect('default/error');
            } catch (Exception $e) {               
                $errMsg = new CommonException($e->getMessage(), $e->getCode());
                $this->setMessage('WARNING', $errMsg->display());
                $this->redirect('default/error');
         }

    }

    /**
     * Set message
     */
    public function setMessage($messageType, $message = array()) {
        $this->getUser()->setFlash('messageType', $messageType);
        $this->getUser()->setFlash('message', $message);
    }


}
