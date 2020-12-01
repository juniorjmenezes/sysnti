<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
	<div data-simplebar class="h-100">
		<!--- Sidemenu -->
		<div id="sidebar-menu">
			<!-- Left Menu Start -->
			<ul class="metismenu list-unstyled" id="side-menu">
				<li class="menu-title">Menu</li>
				<li>
					<a href="index.html" class="waves-effect">
					<i class="mdi mdi-view-dashboard"></i><span class="badge badge-pill badge-success float-right">3</span>
					<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="calendar.html" class=" waves-effect">
					<i class="mdi mdi-calendar-month"></i>
					<span>Chamados</span>
					</a>
                </li>
                <li class="menu-title">Cadastrar</li>
                <li>
					<a href="{{url('adicionar-equipamento')}}" class=" waves-effect">
					<i class="ti-pencil-alt "></i>
					<span>Novo Equipamento</span>
					</a>
                </li>
                <li>
					<a href="{{url('adicionar-periferico')}}" class=" waves-effect">
					<i class="ti-pencil-alt "></i>
					<span>Novo Periférico</span>
					</a>
                </li>
                <li>
					<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class="ti-pencil-alt"></i>
					<span>Novo Órgão</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{url('adicionar-secretaria')}}">Nova Secretaria</a>
                        </li>
                        <li>
                            <a href="{{url('adicionar-setor')}}">Novo Setor</a>
                        </li>
					</ul>
                </li>
                <li class="menu-title">Listar Equipamentos</li>
				<li>
					<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class="ti-desktop"></i>
					<span>Por Tipo</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{url('computadores')}}">Computadores</a>
                        </li>
                        <li>
                            <a href="{{url('impressoras')}}">Impressoras</a>
                        </li>
						<li>
                            <a href="{{url('projetores')}}">Projetores</a>
                        </li>
						<li>
                            <a href="{{url('roteadores')}}">Roteadores</a>
                        </li>
						<li>
                            <a href="{{url('scanners')}}">Scanners</a>
                        </li>
					</ul>
                </li>
                <li>
					<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class="ti-clipboard"></i>
					<span>Por Status</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{url('equipamentos-ativos')}}">Ativos</a>
                        </li>
                        <li>
                            <a href="{{url('equipamentos-inserviveis')}}">Inservíveis</a>
                        </li>
						<li>
                            <a href="{{url('equipamentos-em-manutencao')}}">Manutenção</a>
                        </li>
                        <li>
                            <a href="{{url('equipamentos-remanejados')}}">Remanejados</a>
                        </li>
					</ul>
                </li>
                <li class="menu-title">Listar Periféricos</li>
				<li>
					<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class="ti-desktop"></i>
					<span>Por Tipo</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{url('computadores')}}">Autotransformadores</a>
                        </li>
                        <li>
                            <a href="{{url('impressoras')}}">Estabilizadores</a>
                        </li>
						<li>
                            <a href="{{url('projetores')}}">No-breaks</a>
                        </li>
						<li>
                            <a href="{{url('roteadores')}}">Módulos Isoladores</a>
                        </li>
						<li>
                            <a href="{{url('scanners')}}">Monitores</a>
                        </li>
						<li>
                            <a href="{{url('scanners')}}">Webcams</a>
                        </li>
					</ul>
                </li>
                <li>
					<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class="ti-clipboard"></i>
					<span>Por Status</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{url('equipamentos-ativos')}}">Ativos</a>
                        </li>
                        <li>
                            <a href="{{url('equipamentos-inserviveis')}}">Inservíveis</a>
                        </li>
						<li>
                            <a href="{{url('equipamentos-em-manutencao')}}">Manutenção</a>
                        </li>
                        <li>
                            <a href="{{url('equipamentos-remanejados')}}">Remanejados</a>
                        </li>
					</ul>
				</li>
				<li>
					<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class="mdi mdi-account-group"></i>
					<span>Usuários</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
						<li><a href="auth-login.html">Login</a></li>
						<li><a href="auth-register.html">Register</a></li>
						<li><a href="auth-recoverpw.html">Recover Password</a></li>
						<li><a href="auth-lock-screen.html">Lock Screen</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class="mdi mdi-google-pages"></i>
					<span>Pages</span>
					</a>
					<ul class="sub-menu" aria-expanded="false">
						<li><a href="pages-starter.html">Starter Page</a></li>
						<li><a href="pages-maintenance.html">Maintenance</a></li>
						<li><a href="pages-comingsoon.html">Coming Soon</a></li>
						<li><a href="pages-timeline.html">Timeline</a></li>
						<li><a href="pages-gallery.html">Gallery</a></li>
						<li><a href="pages-faqs.html">FAQs</a></li>
						<li><a href="pages-pricing.html">Pricing</a></li>
						<li><a href="pages-404.html">Error 404</a></li>
						<li><a href="pages-500.html">Error 500</a></li>
					</ul>
				</li>
			</ul>
			<div class="sidebar-section mt-5 mb-3">
				<h6 class="text-reset font-weight-medium">
					Project Completed
					<span class="float-right">67%</span>
				</h6>
				<div class="progress mt-3" style="height: 4px;">
					<div class="progress-bar bg-warning" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
		</div>
		<!-- Sidebar -->
	</div>
</div>
<!-- Left Sidebar End -->

