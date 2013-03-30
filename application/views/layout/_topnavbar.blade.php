<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <ul class="nav pull-left">
                <li{{@((strpos(URL::current(),'home') 		!==false  ) ? ' class="active"' : '' );}}><a href="/"><i class="icon-home"></i></a></li>

                <li class="divider-vertical"></li>

                <li{{@((strpos(URL::current(),'library') 		!==false  ) ? ' class="active"' : '' );}}><a href="/library">Library</a></li>


                <li{{@((strpos(URL::current(),'inbox') 		!==false  ) ? ' class="active"' : '' );}}><a href="/inbox">Inbox</a></li>

                <?php
                /*
                <li{{@((strpos(URL::current(),'modifier') 	!==false  ) ? ' class="active"' : '' );}}><a href="/modifier">Modifier</a></li>
                */
                ?>
                
                <li{{@((strpos(URL::current(),'duplicates') !==false  ) ? ' class="active"' : '' );}}><a href="/duplicates">Duplicates</a></li>

<?php
/*
                <li{{@((strpos(URL::current(),'playlists') 	!==false  ) ? ' class="active"' : '' );}}><a href="/playlists">Playlists</a></li>

                <li class="divider-vertical"></li>
               
                <li{{@((strpos(URL::current(),'notordner') 	!==false  ) ? ' class="active"' : '' );}}><a href="/notordner">Notordner</a></li>
*/
?>
                
                <li{{@((strpos(URL::current(),'database') 	!==false  ) ? ' class="active"' : '' );}}><a href="/database">Database</a></li>

             </ul>
             
             <ul class="nav pull-right">
                <li {{@((strpos(URL::current(),'settings') 	!==false  ) ? ' class="active"' : '' );}}><a href="/settings"><i class="icon-cog"></i></a></li>
                
                <li class="divider-vertical"></li>

<?php
/*
                <li{{@((strpos(URL::current(),'help') 		!==false  ) ? ' class="active"' : '' );}}><a href="/help"><i class="icon-question-sign"></i></a></li>
*/
?>         
                <li>@include('partials._jp-player-nav')</li>
                
            </ul>
        </div>
    </div>
</div>