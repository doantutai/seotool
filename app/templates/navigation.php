<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/dashboard/index/">SEO Tool <strong style="color:#fff">v2</strong></a> <a class="navbar-brand mybrand" href="http://damianschwyrz.de" target="_blank">by damianschwyrz.de</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-link"></i> <?php echo $currentProjectNameSet;?> <b class="caret"></b></a>
            <ul class="dropdown-menu scrollable-menu">
                <?php echo $projectList;?>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Nutzer <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="/logout/"><i class="fa fa-fw fa-power-off"></i> Ausloggen</a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="/dashboard/index/"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#summary"><i class="fa fa-fw fa-bar-chart-o"></i> Zusammenfassung <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="summary" class="collapse">
                    <li>
                        <a href="/summary/ranking/">Rankingindex</a>
                    </li>
                    <li>
                        <a href="/summary/competition/">Konkurrenzindex</a>
                    </li>
                    <li>
                        <a href="/summary/valueindex/">Rankingwertindex</a>
                    </li>
                    <li>
                        <a href="/summary/positions/">Positionsverteilung</a>
                    </li>
                    <li>
                        <a href="/summary/keywords/">Verarbeitete Keywords</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#keywords"><i class="fa fa-fw fa-list"></i> Keywords <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="keywords" class="collapse">
                    <li>
                        <a href="/keywords/index/">Übersicht</a>
                    </li>
                    <li>
                        <a href="/summary/value/">Rankingwert</a>
                    </li>
                    <li>
                        <a href="/keywords/competition/">Konkurrenz</a>
                    </li>
                    <li>
                        <a href="/keywords/chances/">Chancen-Keywords</a>
                    </li>
                    <li>
                        <a href="/keywords/export/">Export</a>
                    </li>
                    <li>
                        <a href="/keywords/add/">Keywords hinzufügen</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#projects"><i class="fa fa-fw fa-sitemap"></i> Projekte <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="projects" class="collapse">
                    <li>
                        <a href="/projects/index/">Projektübersicht</a>
                    </li>
                    <li>
                        <a href="/projects/add/">Projekt hinzufügen</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#backlinks"><i class="fa fa-fw fa-link"></i> Backlinks <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="backlinks" class="collapse">
                    <li>
                        <a href="/backlinks/index/">Übersicht</a>
                    </li>
                    <li>
                        <a href="/backlinks/add/">Backlink hinzufügen</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#system"><i class="fa fa-fw fa-wrench"></i> System <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="system" class="collapse">
                    <li>
                        <a href="/settings/index/">Einstellungen</a>
                    </li>
                    <li>
                        <a href="/system/index/">Status</a>
                    </li>
                    <li>
                        <a href="/system/logging/">Logging</a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
