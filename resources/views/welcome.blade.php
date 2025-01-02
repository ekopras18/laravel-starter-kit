<x-layout-component :resource="$data">
    <div class="row">
        <div class="col-md-8">
            <!-- State saving -->
            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h5 class="mb-0">State saving testt</h5>
                    <div class="d-inline-flex ms-auto">
                        <a class="text-body" data-card-action="collapse">
                            <i class="ph-caret-down"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show">
                    <div class="card-body">
                        <table class="table datatable-colvis-state">
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
                                <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                                <td>$85,600</td>
                            </tr>
                            <tr>
                                <td>Jackelyn</td>
                                <td>Weible</td>
                                <td><a href="#">Airline Transport Pilot</a></td>
                                <td>3 Oct 1981</td>
                                <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                                <td>$106,450</td>
                            </tr>
                            <tr>
                                <td>Aura</td>
                                <td>Hard</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 1969</td>
                                <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                                <td>$237,500</td>
                            </tr>
                            <tr>
                                <td>Nathalie</td>
                                <td><a href="#">Pretty</a></td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 1977</td>
                                <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Sharan</td>
                                <td>Leland</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 1991</td>
                                <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td><a href="#">Woldt</a></td>
                                <td><a href="#">Business Services Sales Representative</a></td>
                                <td>17 Oct 1987</td>
                                <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Sylvia</td>
                                <td><a href="#">Mcgaughy</a></td>
                                <td>Hemodialysis Technician</td>
                                <td>11 Nov 1983</td>
                                <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Lizzee</td>
                                <td><a href="#">Goodlow</a></td>
                                <td>Technical Services Librarian</td>
                                <td>1 Nov 1961</td>
                                <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Kennedy</td>
                                <td>Haley</td>
                                <td>Senior Marketing Designer</td>
                                <td>18 Dec 1960</td>
                                <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Chantal</td>
                                <td><a href="#">Nailor</a></td>
                                <td>Technical Services Librarian</td>
                                <td>10 Jan 1980</td>
                                <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Delma</td>
                                <td>Bonds</td>
                                <td>Lead Brand Manager</td>
                                <td>21 Dec 1968</td>
                                <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Roland</td>
                                <td>Salmos</td>
                                <td><a href="#">Senior Program Developer</a></td>
                                <td>5 Jun 1986</td>
                                <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Coy</td>
                                <td>Wollard</td>
                                <td>Customer Service Operator</td>
                                <td>12 Oct 1982</td>
                                <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Maxwell</td>
                                <td>Maben</td>
                                <td>Regional Representative</td>
                                <td>25 Feb 1988</td>
                                <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                                <td>$130,500</td>
                            </tr>
                            <tr>
                                <td>Cicely</td>
                                <td>Sigler</td>
                                <td><a href="#">Senior Research Officer</a></td>
                                <td>15 Mar 1960</td>
                                <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                                <td>$159,000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /state saving -->
        </div>
        <div class="col-md-4">
            <!-- Custom styles -->
            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h5 class="mb-0">Custom styles</h5>
                    <div class="d-inline-flex ms-auto">
                        <a class="text-body" data-card-action="collapse">
                            <i class="ph-caret-down"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show">
                    <form class="form-validate-jquery" action="#">
                        <div class="card-body">

                            <!-- Basic text input -->

                            <div class="col-lg-12 my-1">
                                <label class="form-label">Basic text input <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="basic" class="form-control" required
                                           placeholder="Text input validation">
                                </div>
                            </div>
                            <!-- /basic text input -->

                            <!-- Select2 select -->
                            <div class="col-lg-12 my-1">
                                <label class="form-label">Select2 select <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <select name="select2" data-placeholder="Select a State..."
                                            class="form-control form-control-select2" required>
                                        <option></option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <!-- /select2 select -->


                            <!-- Password field -->
                            <div class="col-lg-12 my-1">
                                <label class="form-label">Password field <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control"
                                           required
                                           placeholder="Minimum 5 characters allowed">
                                </div>
                            </div>
                            <!-- /password field -->


                            <!-- Repeat password -->
                            <div class="col-lg-12 my-1">
                                <label class="form-label">Repeat password <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="password" name="repeat_password" class="form-control" required
                                           placeholder="Try different password">
                                </div>
                            </div>
                            <!-- /repeat password -->


                            <!-- Email field -->
                            <div class="col-lg-12 my-1">
                                <label class="form-label">Email field <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" id="email" required
                                           placeholder="Enter a valid email address">
                                </div>
                            </div>
                            <!-- /email field -->


                            <!-- Repeat email -->
                            <div class="col-lg-12 my-1">
                                <label class="form-label">Repeat email <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="email" name="repeat_email" class="form-control" required
                                           placeholder="Enter a valid email address">
                                </div>
                            </div>
                            <!-- /repeat email -->


                            <!-- Minimum characters -->
                            <div class="col-lg-12 my-1">
                                <label class="form-label">Minimum characters <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="minimum_characters" class="form-control" required
                                           placeholder="Enter at least 10 characters">
                                </div>
                            </div>
                            <!-- /minimum characters -->


                            <!-- Maximum characters -->
                            <div class="col-lg-12 my-1">
                                <label class="form-label">Maximum characters <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="maximum_characters" class="form-control" required
                                           placeholder="Enter 10 characters maximum">
                                </div>
                            </div>
                            <!-- /maximum characters -->


                            <!-- Minimum number -->
                            <div class="col-lg-12 my-1">
                                <label class="form-label">Minimum number <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="minimum_number" class="form-control" required
                                           placeholder="Enter a value greater than or equal to 10">
                                </div>
                            </div>
                            <!-- /minimum number -->


                            <!-- Maximum number -->
                            <div class="col-lg-12 my-1">
                                <label class="form-label">Maximum number <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="maximum_number" class="form-control" required
                                           placeholder="Please enter a value less than or equal to 10">
                                </div>
                            </div>
                            <!-- /maximum number -->


                            <!-- Basic textarea -->
                            <div class="col-lg-12 my-1">
                                <label class="form-label">Basic textarea <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <textarea rows="5" cols="5" name="textarea" class="form-control" required
                                              placeholder="Default textarea"></textarea>
                                </div>
                            </div>
                            <!-- /basic textarea -->
                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="reset" class="btn btn-light" id="reset">Reset</button>
                            <button type="submit" class="btn btn-primary ms-3">Submit <i
                                    class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /custom styles -->
    </div>
    </div>
    @vite('resources/js/example/example.js')
</x-layout-component>
