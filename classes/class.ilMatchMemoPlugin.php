<?php

include_once("./Services/Repository/classes/class.ilRepositoryObjectPlugin.php");
 
/**
* Match & Memo game repository object plugin
*
* @author Helmut Schottmüller <ilias@aurealis.de>
* @version $Id$
*
*/
class ilMatchMemoPlugin extends ilRepositoryObjectPlugin
{
	function getPluginName()
	{
		return "MatchMemo";
	}
}
?>
