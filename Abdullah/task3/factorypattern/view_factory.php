<?php

class ViewFactory
{
public function __construct()
{
}
/*
* @params $view_path
* @return new $view_path
*/
public function getView($view_name)
{
if(strcmp($view_name,"student")==0) {
return new StudentView();
} if(strcmp($view_name, "teacher")==0) {
return new TeacherView();
}
}
}
