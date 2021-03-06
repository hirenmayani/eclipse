<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Team Component 3.4 Development Plan";
	$pageKeywords	= "Eclipse, Team, 3.4, development plan";
	$pageAuthor		= "Team/Compare/CVS team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>Back to the <a href="../index.php">Team Component Page</a></p>

			<table border="0" cellspacing="10" cellpadding="0">
			  <tbody>
			    <tr>
			      <td><img src="../images/progress.gif" alt="under development"> item
			is under development</td>
			      <td><img src="../images/ok.gif" height="10" width="10" alt="finished"> item is
			finished</td>
			      <td><font class="indexsub" alt="deferred">[&gt;3.4]</font> item is deferred</td>
			    </tr>
			  </tbody>
			</table>
			
			<div class="homeitem3col">
			<h3>Eclipse Project 3.4 Plan items that effect Team</h3>
			
			<p>The following items which appear on the 
			<a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_4.html">Eclipse Project 3.4 Plan</a>
			will have an effect on the Team/Compare/CVS component.<p>
			<ul>
			    <li><strong>Plan item 1</strong>: There is no Eclipse 3.4 plan yet but when there is we'll make sure
			    to update this section.
			    </li>
			</ul>
			
			The next section contains a description of the particular items we plan to address in 3.4.
			</div>
			
			<div class="homeitem3col">
			
			<a name="Themes"></a>
			<h3>Overall Team 3.4 Plan</h3>
			
			<p>The overall themes for this release are detailed below 
			(Note, at this point, these are just items that we could potentially address.
			Until we know the overall 3.4 plan, we cannot commit to any particular items):</p>
			<ul>
			  <li>[&gt;3.4] <strong>Adopt new menu/commands</strong> (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=196349">196349</a>): The new menu/commands story has been evolving over the last few releases
			  and should be in a state in 3.4 that will allow the Team, Compare and CVS plug-ins to adopt the support.
			  </li>
			  <li>[&gt;3.4] <strong>Adapt editor functionality to Compare Editor</strong> (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=169386">169386</a>): We should continue to provide as much editor capabilities
			  as possible in the compare editor.
			  </li>
			  <li><strong>Improve unmatched patch handling</strong>: There are several improvements that can be made around patch handling.
			  Some examples are:
			  <ul>
			  	<li>[&gt;3.4] Better visual feedback in the merge viewer when portions of a patch cannot be matched 
			  	 so that the user understands what to do and has some additional tools to help them find a match. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=190844">190844</a>)</li>
			  	 <li><img src="../images/ok.gif" height="10" width="10" alt="finished"> Fuzz factor improvements (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=199846">199846</a>)</li>
			  </ul>
			  </li>
			  <li>[&gt;3.4] <strong>Compare with Each Other</strong> (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=193321">193321</a>): We would like to provide a more Synchronize view like work flow to
			  the Compare with Each Other action.
			  </li>
			  <li>[&gt;3.4] <strong>Address Model-based Synchronize View regressions</strong> (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=172027">172027</a>):
			  When the model-based Synchronize view was introduced in 3.2, there were several regressions that prevented CVs from removing support
			  for the old-style Synchronizations. It would be good if these regressions could be addressed.
			  </li>
			  <li><strong>Project Configuration</strong>: There are several improvements that can be made around project configuration.
			  Some examples are:
			  <ul>
			  <li><img src="../images/ok.gif" height="10" width="10" alt="finished"> Multi-project sharing (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=104203">104203</a>)</li>
			  <li>[&gt;3.4] Multi-project configuration on checkout/import (e.g. make non-Eclipse projects Java projects). (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=73590">73590</a>)<li>
			  </ul>
			  </li>
			  <li><strong>Performance</strong>: There are several performance issues we would like to address:
			     <ul>
			     <li>[&gt;3.4] CVS Log Entry Cache (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=79697">79697</a>)</li>
			     <li>[&gt;3.4] Compare Editor Memory Usage (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=90209">90209</a>)</li>
			     <li>Other Issues (<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=Platform&component=Compare&component=CVS&component=Team&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=performance&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Query</a>)
			     </li>
			     </ul>
			  </li>
			</ul>
			
			</div>
			
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
	<div class="sideitem">
		<h6>Quick Links</h6>
		<ul>
			<li><a href="#Themes">Overall Themes</a></li>
		</ul>
	</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="../index.php">Team Component</a></li>
				<li><a href="../../platform-cvs">CVS Component</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
