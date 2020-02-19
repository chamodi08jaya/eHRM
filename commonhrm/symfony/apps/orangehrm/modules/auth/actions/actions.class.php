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
 * Actions class for Auth module
 *
 *-------------------------------------------------------------------------------------------------------
 *  Author    - Roshan Wijesena
 *  On (Date) - 27 July 2011 
 *  Comments  - Description on module action what is happen in the code 
 *  Version   - Version 1.0
 * -------------------------------------------------------------------------------------------------------
**/

class authActions extends sfActions {
    
 /**
  * Login action. Forwards to OrangeHRM login page if not already logged in.
  *
  * @param sfRequest $request A request object
  */
  public function executeLogin(sfWebRequest $request) {
      
      sfLoader::loadHelpers('Url');
      $this->redirect(public_path('../../login.php'));
  }
  
}
