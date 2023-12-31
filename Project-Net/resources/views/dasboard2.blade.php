@extends('layout.main')

@section('content')

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Basic datatable</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>


					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Job Title</th>
								<th>DOB</th>
								<th>Status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marth</td>
								<td><a href="datatable_basic.html#">Enright</a></td>
								<td>Traffic Court Referee</td>
								<td>22 Jun 1972</td>
								<td><span class="label label-success">Active</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Jackelyn</td>
								<td>Weible</td>
								<td><a href="datatable_basic.html#">Airline Transport Pilot</a></td>
								<td>3 Oct 1981</td>
								<td><span class="label label-default">Inactive</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Aura</td>
								<td>Hard</td>
								<td>Business Services Sales Representative</td>
								<td>19 Apr 1969</td>
								<td><span class="label label-danger">Suspended</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Nathalie</td>
								<td><a href="datatable_basic.html#">Pretty</a></td>
								<td>Drywall Stripper</td>
								<td>13 Dec 1977</td>
								<td><span class="label label-info">Pending</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Sharan</td>
								<td>Leland</td>
								<td>Aviation Tactical Readiness Officer</td>
								<td>30 Dec 1991</td>
								<td><span class="label label-default">Inactive</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Maxine</td>
								<td><a href="datatable_basic.html#">Woldt</a></td>
								<td><a href="datatable_basic.html#">Business Services Sales Representative</a></td>
								<td>17 Oct 1987</td>
								<td><span class="label label-info">Pending</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Sylvia</td>
								<td><a href="datatable_basic.html#">Mcgaughy</a></td>
								<td>Hemodialysis Technician</td>
								<td>11 Nov 1983</td>
								<td><span class="label label-danger">Suspended</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Lizzee</td>
								<td><a href="datatable_basic.html#">Goodlow</a></td>
								<td>Technical Services Librarian</td>
								<td>1 Nov 1961</td>
								<td><span class="label label-danger">Suspended</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Kennedy</td>
								<td>Haley</td>
								<td>Senior Marketing Designer</td>
								<td>18 Dec 1960</td>
								<td><span class="label label-success">Active</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Chantal</td>
								<td><a href="datatable_basic.html#">Nailor</a></td>
								<td>Technical Services Librarian</td>
								<td>10 Jan 1980</td>
								<td><span class="label label-default">Inactive</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Delma</td>
								<td>Bonds</td>
								<td>Lead Brand Manager</td>
								<td>21 Dec 1968</td>
								<td><span class="label label-info">Pending</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Roland</td>
								<td>Salmos</td>
								<td><a href="datatable_basic.html#">Senior Program Developer</a></td>
								<td>5 Jun 1986</td>
								<td><span class="label label-default">Inactive</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Coy</td>
								<td>Wollard</td>
								<td>Customer Service Operator</td>
								<td>12 Oct 1982</td>
								<td><span class="label label-success">Active</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Maxwell</td>
								<td>Maben</td>
								<td>Regional Representative</td>
								<td>25 Feb 1988</td>
								<td><span class="label label-danger">Suspended</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Cicely</td>
								<td>Sigler</td>
								<td><a href="datatable_basic.html#">Senior Research Officer</a></td>
								<td>15 Mar 1960</td>
								<td><span class="label label-info">Pending</span></td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="datatable_basic.html#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="datatable_basic.html#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-excel"></i> Export to .csv</a></li>
												<li><a href="datatable_basic.html#"><i class="icon-file-word"></i> Export to .doc</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->



@endsection