<?php
$bodyId = 'AboutPage';
include 'header.php';
?>
<div id="Content">
	<div id="Features">
		<span id="FeaturesTitle">With RackTables you can:</span>
		<ul>
			<li>Have a list of all devices you've got</li>
			<li>Have a list of all racks and enclosures</li>
			<li>Mount the devices into the racks</li>
			<li>Maintain physical ports of the devices and links between them</li>
			<li>Manage IP addresses, assign them to the devices and group them into networks</li>
			<li>Document your NAT rules</li>
			<li>Describe your loadbalancing policy and store loadbalancing configuration</li>
			<li>Attach files to various objects in the system</li>
			<li>Create users, assign permissions and allow or deny any actions they can do</li>
			<li>Label everything and even everyone with flexible tagging system</li>
			<li><strong>And, of course, you can access all that from anywhere in the world. All you need is a browser and internet connection!</strong></li>
		</ul>
	</div>
<p>Lots of system and network administrators come to the point where they have to maintain quite complex documentation of the racks, devices, links and network resources they have in control. Most of them end up with putting all that information in some kind of spreadsheet and update that spreadsheet every time they do changes. That may work more or less acceptable until more than one person is doing the job. After that it turns into a nightmare and most of the people find it extremely irritating.</p>

<p>This project aims to provide a complete solution to that problem. We &mdash; the authors of this project &mdash; are system and network administrators who once had to run a system of hundreds of servers, about 50 racks, thousands of IP addresses, lots of network equipment and other useful stuff lying around in the datacenters and offices of the company we worked for. And as everyone else we were trying to maintain various documentation in spreadsheets and eventually failed to maintain it well. Then we started thinking of a solution.</p>

<p>There were, and there now are, of course, aplications that can do the job partially, but at that time we couldn't find one that would handle all that mess completely, either because we weren't looking thoroughly enough, or there just wasn't one that would just fit in. One way or another, we wrote a small application in PHP that would just store a list of racks and object, then started adding new features here and there and end up with this application that we still use and find it extremely useful.</p>

<p>While communicating with our colleagues in other places all over the world we found that we could share our experience and that would be for everyone's benefit. We are proud to present RackTables. It's distributed under GPL license, so please go ahead and download and give it a try. <a href="contacts.php">Drop us a line</a> if you have any questions, or comments, or if you want to express how you like this product or even how you hate it. We always like to know other people's opinion.<p>

<p><strong>P. S.</strong> The name "RackTables" comes from the fact that the original motivation for this software was to replace a set of pre-existing rack diagrams. The diagrams were manually maintained as tables inside a wiki page &mdash; one table per rack. When rendered, the wiki page looked very remotely similar to how current RackTables displays rack diagrams. As the purpose of the very first script was to generate for the same <u>racks</u> the same HTML <u>tables</u> from a few <u>tables</u> in a MySQL database, it was quite natural that "RackTables" happened to be the name for that first script, and then it just remained.</p>

</div>
<?php include 'footer.php';?>
