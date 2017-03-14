<?php
$bodyId = 'ContactsPage';
include 'header.php';
?>
<div id="Content">
<p>For those willing to give thumbs up or to help spreading the word, there are several ranking systems
this project accepts votes/reviews through: <a href="https://sourceforge.net/projects/racktables">SourceForge</a>,
<a href="https://www.openhub.net/p/RackTables">Open Hub</a>
and <a href="https://www.linkedin.com/groups/2246365">LinkedIn</a>. Even a single post
in your blog would be just Ok.

</p>

<p>There is a free (and even advertisement-free, thanks to <a href="https://www.freelists.org/">FreeLists</a>)
mailing list for RackTables
(<tt>racktables-users</tt>). It is currently the best place to share your experience or to ask
for an advice. To change your subscription to the list, use the form below
(or the <a href="https://www.freelists.org/list/racktables-users">original Freelists form</a>).
Public archives of the list are <a href="https://www.freelists.org/archives/racktables-users/">available</a> without subscription.

        <div id="MailingList">
                <h3>RackTables users mailing list</h3>
                <form action="https://www.freelists.org/cgi-bin/subscription.cgi" method="post">
                        <p>
                                Enter your email address:
                                <input name="email" type="text">
                                <input name="list" value="racktables-users" type="hidden">
                                <input name="url_or_message" value="" type="hidden">
                                <select name="action">
                                        <option value="subscribe">Subscribe</option>
                                        <option value="unsubscribe">Unsubscribe</option>
                                        <option value="set digest">Turn Digest mode on</option>
                                        <option value="unset digest">Turn Digest mode off</option>
                                        <option value="set vacation">Turn Vacation mode on</option>
                                        <option value="unset vacation">Turn Vacation mode off</option>
                                        <option value="help">Get Help</option>
                                </select>
                                <input value="Go!" type="submit">
                        </p>
                </form>
        </div>
</p>

<p>If you are sure you found a bug in the software, please use this
<a href="https://bugs.racktables.org/">Mantis bug tracking system</a>
system we have on SourceForge. Like in many volunteer-driven projects,
requests are not dispatched immediately, but most of the major bugs end up
fixed eventually. <strong>Please note</strong>, that all reported issues
are public by default, but it is possible to protect sensitive information
by setting "View Status" of a submitted issue to "private".</p>

<p>If for some reason the public list and the bug tracker are not the choice
for the matter, there is a closed committers-only list: <img src="img/email2011.png" class="email" width=154 height=15>.</p>
</div>
<?php include 'footer.php';?>
