<div class="content-inner">
    <!-- Page header -->
    <div class="page-header page-header-light">

        <div class="navbar navbar-expand-lg border-top py-2">
            <div class="container-fluid">
                <ul class="nav navbar-nav flex-row flex-fill">
                    <li class="nav-item me-1">
                        <a href="#menus" class="navbar-nav-link navbar-nav-link-icon active rounded"
                            data-bs-toggle="tab">
                            <div class="d-flex align-items-center mx-lg-1">
                                <i class="ph-sidebar"></i>
                                <span class="d-none d-lg-inline-block ms-2">Menu</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item me-1">
                        <a href="#roles" class="navbar-nav-link navbar-nav-link-icon rounded" data-bs-toggle="tab">
                            <div class="d-flex align-items-center mx-lg-1">
                                <i class="ph-user-circle-gear"></i>
                                <span class="d-none d-lg-inline-block ms-2">
                                    Role
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item me-1">
                        <a href="#rolemenus" class="navbar-nav-link navbar-nav-link-icon rounded" data-bs-toggle="tab">
                            <div class="d-flex align-items-center mx-lg-1">
                                <i class="ph-user-focus"></i>
                                <span class="d-none d-lg-inline-block ms-2">
                                    Role Menu
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item me-1">
                        <a href="#users" class="navbar-nav-link navbar-nav-link-icon rounded" data-bs-toggle="tab">
                            <div class="d-flex align-items-center mx-lg-1">
                                <i class="ph-user-circle"></i>
                                <span class="d-none d-lg-inline-block ms-2">Users</span>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item d-lg-none ms-auto">
                        <a href="#profile_nav" class="navbar-nav-link navbar-nav-link-icon collapsed rounded"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator"></i>
                        </a>
                    </li>
                </ul>


            </div>
        </div>
    </div>
    <!-- /page header -->

    <div class="content-inner">
        <!-- Inner content -->
        <!-- Content area -->
        <div class="content">
            <div class="tab-content flex-1 order-2 order-lg-1">
                <div class="tab-pane fade active show" id="menus">
                    <!-- Menu Modul -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header d-sm-flex">
                                    <h5 class="mb-0">Settings Menu</h5>
                                    <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                                        <span class="text-muted"></span>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <table class="table datatable table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th width="2%">NO</th>
                                                @foreach($grid_menu as $field)
                                                <th width="{{$field['width']}}">{{$field['label']}}</th>
                                                @endforeach
                                                <th width="3%">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($query_menu as $key => $row)
                                            <tr>
                                                <td class="table-no">{{$key+1}}</td>
                                                @foreach($grid_menu as $field)
                                                @if($field['type'] == 'images')
                                                <td class="{{$field['class'] ?? ''}}">
                                                    <center>
                                                        <a href="javascript: void(0);">
                                                            <img src="{!! $row->{$field['field']} !!}" title="contact-img"
                                                                class="rounded-circle avatar-sm">
                                                        </a>
                                                    </center>
                                                </td>
                                                @elseif($field['type'] == 'icon')
                                                <td class="{{$field['class'] ?? ''}}"> <i class="{!! $row->{$field['field']} !!}"></i></td>
                                                @else
                                                <td class="{{$field['class'] ?? ''}}">{!! $row->{$field['field']} !!}</td>
                                                @endif
                                                @endforeach
                                                <td class="text-center">
                                                    <a wire:click="editForm({{$row->$primarykey_menu}})" onclick="edit({{$row->$primarykey_menu}},{{$primarykey_menu}})" class="action-icon"> <i
                                                            class="ph-note-pencil text-success font-15"></i></a>
                                                    <a wire:click="deleteConfirm({{$row->$primarykey_menu}})" class="action-icon"> <i
                                                            class="ph-trash-simple text-danger font-15"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Input Data</h6>
                                </div>

                                <div class="card-body">
                                    <form action="#">
                                        <div class="mb-3">
                                            <label class="form-label">Your name:</label>
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Your password:</label>
                                            <input type="password" class="form-control"
                                                placeholder="Your strong password">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Your message:</label>
                                            <textarea rows="3" cols="3" class="form-control"
                                                placeholder="Enter your message here"></textarea>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="btn btn-light btn-icon"><i class="ph-question"></i></a>
                                            <div class="d-inline-flex">
                                                <button type="reset" class="btn btn-light">Cancel</button>
                                                <button type="submit" class="btn btn-primary ms-3">Submit <i
                                                        class="ph-paper-plane-tilt ms-2"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /menu modul -->

                </div>

                <div class="tab-pane fade" id="roles">

                    <!-- Roles -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header d-sm-flex">
                                    <h5 class="mb-0">Roles Menu</h5>
                                    <div class="d-flex d-sm-block mt-1 mt-sm-0 ms-sm-auto">
                                        <span class="text-muted"></span>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <table class="table datatable table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Job Title</th>
                                                <th>DOB</th>
                                                <th>Status</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Marth</td>
                                                <td><a href="#">Enright</a></td>
                                                <td>Traffic Court Referee</td>
                                                <td>22 Jun 1972</td>
                                                <td><span
                                                        class="badge bg-success bg-opacity-10 text-success">Active</span>
                                                </td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Marth</td>
                                                <td><a href="#">Enright</a></td>
                                                <td>Traffic Court Referee</td>
                                                <td>22 Jun 1972</td>
                                                <td><span
                                                        class="badge bg-success bg-opacity-10 text-success">Active</span>
                                                </td>
                                                <td>$95,600</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Input Data</h6>
                                </div>

                                <div class="card-body">
                                    <form action="#">
                                        <div class="mb-3">
                                            <label class="form-label">Your name:</label>
                                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Your password:</label>
                                            <input type="password" class="form-control"
                                                placeholder="Your strong password">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Your message:</label>
                                            <textarea rows="3" cols="3" class="form-control"
                                                placeholder="Enter your message here"></textarea>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="btn btn-light btn-icon"><i class="ph-question"></i></a>
                                            <div class="d-inline-flex">
                                                <button type="reset" class="btn btn-light">Cancel</button>
                                                <button type="submit" class="btn btn-primary ms-3">Submit <i
                                                        class="ph-paper-plane-tilt ms-2"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /roles -->

                </div>

                <div class="tab-pane fade" id="rolemenus">

                    <!-- Available hours -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Available hours</h5>
                        </div>

                        <div class="card-body">
                            <div class="chart-container">
                                <div class="chart has-fixed-height" id="available_hours"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /available hours -->

                </div>

                <div class="tab-pane fade" id="users">

                    <!-- Profile info -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Profile information</h5>
                        </div>

                        <div class="card-body">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" value="Victoria" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Full name</label>
                                            <input type="text" value="Smith" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Address line 1</label>
                                            <input type="text" value="Ring street 12" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Address line 2</label>
                                            <input type="text" value="building D, flat #67" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" value="Munich" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">State/Province</label>
                                            <input type="text" value="Bayern" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">ZIP code</label>
                                            <input type="text" value="1031" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" readonly="readonly" value="victoria@smith.com"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your country</label>
                                            <select class="form-select">
                                                <option value="germany" selected>Germany</option>
                                                <option value="france">France</option>
                                                <option value="spain">Spain</option>
                                                <option value="netherlands">Netherlands</option>
                                                <option value="other">...</option>
                                                <option value="uk">United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone #</label>
                                            <input type="text" value="+99-99-9999-9999" class="form-control">
                                            <div class="form-text text-muted">+99-99-9999-9999</div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Upload profile image</label>
                                            <input type="file" class="form-control">
                                            <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max
                                                file
                                                size 2Mb</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /profile info -->


                    <!-- Account settings -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Account settings</h5>
                        </div>

                        <div class="card-body">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" value="Vicky" readonly class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Current password</label>
                                            <input type="password" value="password" readonly class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">New password</label>
                                            <input type="password" placeholder="Enter new password"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Repeat password</label>
                                            <input type="password" placeholder="Repeat new password"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Profile visibility</label>

                                            <label class="form-check mb-2">
                                                <input type="radio" name="visibility" class="form-check-input" checked>
                                                <span class="form-check-label">Visible to everyone</span>
                                            </label>

                                            <label class="form-check mb-2">
                                                <input type="radio" name="visibility" class="form-check-input">
                                                <span class="form-check-label">Visible to friends only</span>
                                            </label>

                                            <label class="form-check mb-2">
                                                <input type="radio" name="visibility" class="form-check-input">
                                                <span class="form-check-label">Visible to my connections only</span>
                                            </label>

                                            <label class="form-check">
                                                <input type="radio" name="visibility" class="form-check-input">
                                                <span class="form-check-label">Visible to my colleagues only</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Notifications</label>

                                            <label class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" checked>
                                                <span class="form-check-label">Password expiration
                                                    notification</span>
                                            </label>

                                            <label class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" checked>
                                                <span class="form-check-label">New message notification</span>
                                            </label>

                                            <label class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" checked>
                                                <span class="form-check-label">New task notification</span>
                                            </label>

                                            <label class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <span class="form-check-label">New contact request
                                                    notification</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /account settings -->

                </div>
            </div>
        </div>
        <!-- /content area -->
    </div>
    <!-- /inner content -->
</div>