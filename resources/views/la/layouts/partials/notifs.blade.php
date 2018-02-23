		<!-- Navbar Right Menu -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- Messages: style can be found in dropdown.less-->
				@if(LAConfigs::getByKey('show_messages'))
				<li class="dropdown messages-menu">
					<!-- Menu toggle button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-envelope-o"></i>
						<span class="label label-success">4</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">Usted tiene 4  mensajes</li>
						<li>
							<!-- inner menu: contains the messages -->
							<ul class="menu">
								<li><!-- start message -->
									<a href="#">
										<div class="pull-left">
											<!-- User Image -->
											<img src="@if(isset(Auth::user()->email)) {{ Gravatar::fallback(asset('la-assets/img/user2-160x160.jpg'))->get(Auth::user()->email) }} @else asset('/img/user2-160x160.jpg' @endif" class="img-circle" alt="User Image"/>
										</div>
										<!-- Message title and timestamp -->
										<h4>
											Equipo de soporte
											<small><i class="fa fa-clock-o"></i> 5 mins</small>
										</h4>
										<!-- The message -->
										<p>Aun no ha registrado los terceros?</p>
									</a>
								</li><!-- end message -->
							</ul><!-- /.menu -->
						</li>
						<li class="footer"><a href="#">Ver todos los mensajes</a></li>
					</ul>
				</li><!-- /.messages-menu -->
				@endif
				@if(LAConfigs::getByKey('show_notifications'))
				<!-- Notifications Menu -->
				<li class="dropdown notifications-menu">
					<!-- Menu toggle button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-bell-o"></i>
						<span class="label label-warning">10</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">Tienes 10 notificaciones</li>
						<li>
							<!-- Inner Menu: contains the notifications -->
							<ul class="menu">
								<li><!-- start notification -->
									<a href="#">
										<i class="fa fa-users text-aqua"></i> 5 nuevos miembros hoy
									</a>
								</li><!-- end notification -->
							</ul>
						</li>
						<li class="footer"><a href="#">Ver todos</a></li>
					</ul>
				</li>
				@endif
				@if(LAConfigs::getByKey('show_tasks'))
				<!-- Tasks Menu -->
				<li class="dropdown tasks-menu">
					<!-- Menu Toggle Button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-flag-o"></i>
						<span class="label label-danger">9</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">Teienes 9 tareas</li>
						<li>
							<!-- Inner menu: contains the tasks -->
							<ul class="menu">
								<li><!-- Task item -->
									<a href="#">
										<!-- Task title and progress text -->
										<h3>
											Diseño de algunos botones
											<small class="pull-right">20%</small>
										</h3>
										<!-- The progress bar -->
										<div class="progress xs">
											<!-- Change the css width attribute to simulate progress -->
											<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">20% Completo</span>
											</div>
										</div>
									</a>
								</li><!-- end task item -->
							</ul>
						</li>
						<li class="footer">
							<a href="#">Ver todas las tareas</a>
						</li>
					</ul>
				</li>
				@endif
				@if (Auth::guest())
					<li><a href="{{ url('/login') }}">Acceso</a></li>
					<li><a href="{{ url('/register') }}">Registarse</a></li>
				@else
					<!-- User Account Menu -->
					<li class="dropdown user user-menu">
						<!-- Menu Toggle Button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<!-- The user image in the navbar-->
							<img src="{{ Gravatar::fallback(asset('la-assets/img/user2-160x160.jpg'))->get(Auth::user()->email) }}" class="user-image" alt="User Image"/>
							<!-- hidden-xs hides the username on small devices so only the image appears. -->
							<span class="hidden-xs">{{ Auth::user()->name }}</span>
						</a>
						<ul class="dropdown-menu">
							<!-- The user image in the menu -->
							<li class="user-header">
								<img src="{{ Gravatar::fallback(asset('la-assets/img/user2-160x160.jpg'))->get(Auth::user()->email) }}" class="img-circle" alt="User Image" />
								<p>
									{{ Auth::user()->name }}
									<?php
									$datec = Auth::user()['created_at'];
									?>
									<small>Miembro desde <?php echo date("M. Y", strtotime($datec)); ?></small>
								</p>
							</li>
							<!-- Menu Body -->
							@role("SUPER_ADMIN")
							<li class="user-body">
								<div class="col-xs-6 text-center mb10">
									<a href="{{ url(config('laraadmin.adminRoute') . '/lacodeeditor') }}"><i class="fa fa-code"></i> <span>Editor</span></a>
								</div>
								<div class="col-xs-6 text-center mb10">
									<a href="{{ url(config('laraadmin.adminRoute') . '/modules') }}"><i class="fa fa-cubes"></i> <span>Modules</span></a>
								</div>
								<div class="col-xs-6 text-center mb10">
									<a href="{{ url(config('laraadmin.adminRoute') . '/la_menus') }}"><i class="fa fa-bars"></i> <span>Menus</span></a>
								</div>
								<div class="col-xs-6 text-center mb10">
									<a href="{{ url(config('laraadmin.adminRoute') . '/la_configs') }}"><i class="fa fa-cogs"></i> <span>Configure</span></a>
								</div>
								<div class="col-xs-6 text-center">
									<a href="{{ url(config('laraadmin.adminRoute') . '/backups') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a>
								</div>
							</li>
							@endrole
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="{{ url(config('laraadmin.adminRoute') . '/users/') .'/'. Auth::user()->id }}" class="btn btn-default btn-flat">Perfil</a>
								</div>
								<div class="pull-right">
									<a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Salir</a>
								</div>
								
		                            <div  style="display: block;  margin-left: auto;  margin-right: auto; text-align: center; "> 
		                                <a href="{{ url(config('laraadmin.adminRoute') . '/users/') .'/'. Auth::user()->id  }}" > 
		                                    <span class="fa-stack fa-lg">         
		                                        <i class="fa fa-circle  fa-stack-2x " style="color:orange"></i>  
		                                        <i class="fa fa-dribbble fa-stack-2x fa-spin " style="color:black;" ></i>
		                                    </span>
		                                </a>
		                            </div>
		                        
							</li>
						</ul>
					</li>
				@endif
				@if(LAConfigs::getByKey('show_rightsidebar'))
				<!-- Control Sidebar Toggle Button -->
				<li>
					<a href="#" data-toggle="control-sidebar"><i class="fa fa-comments-o"></i> <span class="label label-warning">10</span></a>
					
				</li>
				@endif
			</ul>
		</div>