<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//This is the url for detailing controller name not for view//
//i was confused 


$route['viewfeedback']='Feedbackview/index';
$route['addpoll']='Addpoll/index';
$route['viewf']='Feedbackview/index';
$route['departmentadd']='Dept/index';
$route['addstaff']='Staffadd/index';
$route['logout']='logout/index';
$route['admin']='user/index';
$route['login']='login/index';
$route['Community']='forum/index';
$route['Staffs']='staffs/index';
$route['Feedback']='Feedback/index';
$route['Poll']='poll/index';
$route['details']='details/index';
$route['posts/(:any)']="posts/view/$1";
$route['staffs/(:any)']="staffs/view/$1";
$route['404_override'] = '';
$route['posts']='posts/index';
$route['registration']= 'registration/index';
$route['default_controller'] = 'pages/view';
$route['(:any)']="pages/view/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


?>