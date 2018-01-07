@extends('layouts.dashboard') 

@section('content')
<div class="content">
                <div class="container-fluid">

                    </div>
                <div class="row">
                <div class="col-md-12">
                <div class="card">
                <div class="card-content">
                <h4 class="card-title">Website Images</h4>
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                    <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Current Image</th>
                                <th>Image Name</th>


                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="http://lourdmathachurch.com/wp-content/themes/enfold/images/church1.jpg"></td>
                                <td>Slider Image 1 (dimensions: 1123x514 pixels) </td>


                                <td class="text-right">

                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="image_name" value="slider1"/>
                                        <td>
                                        <input type="file" name="fileToUpload" id="fileToUpload"/>

                                        </td>
                                        <td>
                                        <input type="submit" value="Upload Image" title="Change Image" class="btn btn-simple btn-warning btn-icon edit"  name="submit"/>

                                        </td>
                                    </form>


                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="http://lourdmathachurch.com/wp-content/themes/enfold/images/church2.jpg"></td>
                                <td>Slider Image 2 (dimensions: 1123x514 pixels)</td>


                                <td class="text-right">

                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="image_name" value="slider2"/>
                                        <td>
                                            <input type="file" name="fileToUpload" id="fileToUpload"/>

                                        </td>
                                        <td>
                                            <input type="submit" value="Upload Image" title="Change Image" class="btn btn-simple btn-warning btn-icon edit"  name="submit"/>

                                        </td>
                                    </form>


                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="http://lourdmathachurch.com/wp-content/themes/enfold/images/church3.jpg"></td>
                                <td>Slider Image 3 (dimensions: 1123x514 pixels)</td>


                                <td class="text-right">

                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="image_name" value="slider3"/>
                                        <td>
                                            <input type="file" name="fileToUpload" id="fileToUpload"/>

                                        </td>
                                        <td>
                                            <input type="submit" value="Upload Image" title="Change Image" class="btn btn-simple btn-warning btn-icon edit"  name="submit"/>

                                        </td>
                                    </form>


                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="http://lourdmathachurch.com/wp-content/themes/enfold/images/church4.jpg"></td>
                                <td>Slider Image 4 (dimensions: 1123x514 pixels)</td>


                                <td class="text-right">

                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="image_name" value="slider4"/>
                                        <td>
                                            <input type="file" name="fileToUpload" id="fileToUpload"/>

                                        </td>
                                        <td>
                                            <input type="submit" value="Upload Image" title="Change Image" class="btn btn-simple btn-warning btn-icon edit"  name="submit"/>

                                        </td>
                                    </form>


                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
<br/>
                    <h4 class="card-title">Website Contents</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>



                <div class="material-datatables">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Current</th>
                    <th>New Content</th>

                    <th class="disabled-sorting text-right">Actions</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <form method="post" action="upload.php">
                    <td>1</td>
                    <td>Welcome Note Head</td>
                    <td>ലൂർദ് മാതാ ഇടവകയിലേക്ക് സ്വാഗതം !!</td>
                    <td>

                            <input type="hidden" name="textTitle" value="welcomenoteHead"/>
                            <input type="text" name="new_welcomenoteHead"/>

                    </td>

                    <td class="text-right">

                        <input type="submit" value="Change" title="Change Text" class="btn btn-simple btn-warning btn-icon edit"  name="submit"/>



                    </td>
                    </form>
                </tr>
                <tr>
                    <form method="post" action="upload.php">
                        <td>2</td>
                        <td>welcomenote Content</td>
                        <td>താങ്കളെ ലൂർദ് മാതാ ഇടവകയുടെ വെബ്‌സൈറ്റിലേക്ക് ഹൃദയപൂർവം സ്വാഗതം ചെയ്യുന്നു. ഇടവകയെ സംബന്ധിച്ച വിവരങ്ങളും വിശേഷങ്ങളും ഇതിലെ വിവിധ പേജുകളിലൂടെ നിങ്ങള്ക്ക് ലഭിക്കുന്നതാണ്. ഇതുവഴി ഇടവകയുമായി നിരന്തരം അടുത്ത ബന്ധം പുലർത്തുവാൻ കഴിയട്ടെയെന്ന് ആശംസിക്കുന്നു.</td>
                        <td>

                            <input type="hidden" name="textTitle" value="welcomenoteContent"/>
                            <input type="text" name="new_welcomenoteContent"/>

                        </td>

                        <td class="text-right">

                            <input type="submit" value="Change" title="Change Text" class="btn btn-simple btn-warning btn-icon edit"  name="submit"/>



                        </td>
                    </form>
                </tr>
                <tr>
                    <form method="post" action="upload.php">
                        <td>3</td>
                        <td>Priest Message</td>
                        <td>ഈശോയിൽ പ്രിയരേ, "അത്യുന്നതങ്ങളിൽ ദൈവത്തിന് മഹത്വം ! ഭൂമിയിൽ ദൈവക്യപ ലഭിച്ചവർക്ക് സമാധാനം !" (ലുക്കാ 2 :14 ) ദൈവത്തിന്റെ മഹത്വം വെളിപ്പെടുത്തന്നതാണ്    ക്രിസ്തുമസ് . ആട്ടിടയന്മാരും കിഴക്ക് നിന്ന് വന്ന പുജരാജാക്കന്മാരും അവിടുത്ത മഹത്വം ദർശിച്ചവരാണ് . എന്താണ് ദൈവത്തിന്റെ മഹത്വം ? ദൈവത്തിന്റെ രക്ഷാകരമായ സാന്നിധ്യമാണത് . അവിടുത്തെ രക്ഷിക്കുന്ന ഇടപെടലാണത് ഈ  ക്രിസ്തുമസ് കാലം, പുതുവർഷം ദൈവനത്തിന്റെ മഹത്വം നമ്മുടെ ജീവിതങ്ങളിലും, കുടുംബങ്ങളിലും, ഇടവകയിലും, ബന്ധങ്ങളിലും ദർശിക്കുവാനും വിവേചിച്ചറിയുവാനും നമുക്കിടവരുമാറാകട്ടെ . ഏവർക്കും ക്രിസ്തുമസ് പുതുവത്സരാശംസകൾ</td>
                        <td>

                            <input type="hidden" name="textTitle" value="priestmsg"/>
                            <input type="text" name="new_priestmsg"/>

                        </td>

                        <td class="text-right">

                            <input type="submit" value="Change" title="Change Text" class="btn btn-simple btn-warning btn-icon edit"  name="submit"/>



                        </td>
                    </form>
                </tr>
                </tbody>
                </table>
                </div>

                </div>
                <!-- end content-->
                </div>
                <!--  end card  -->
                </div>
                <!-- end col-md-12 -->
                </div>
                </div>


@endsection
