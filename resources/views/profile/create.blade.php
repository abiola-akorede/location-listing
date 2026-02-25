@extends('layout.provider')
@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
  
    .file-upload-container {
        margin-bottom: 20px;
    }
  
    .preview-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        padding: 10px;
        border: 2px dashed #ddd;
        min-height: 150px;
        align-items: center;
    }
  
    .preview-box {
        width: 120px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
        position: relative;
        background: #f9f9f9;
    }
  
    .preview-box img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }
  
    .preview-box p {
        font-size: 12px;
        margin: 5px 0;
    }
  
    .delete-btn {
        position: absolute;
        top: 5px;
        right: 5px;
        background: red;
        color: white;
        border: none;
        cursor: pointer;
        padding: 3px 6px;
        border-radius: 50%;
        font-size: 12px;
    }
  
    .file-input {
        display: none;
    }
  
    .upload-btn {
        background-color: #007bff;
        color: white;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        display: inline-block;
    }
  
    .upload-btn:hover {
        background-color: #0056b3;
    }
  
    </style>


<div class="tz-2 tz-2-admin">
    <div class="tz-2-com tz-2-main">
        <h4> Profile Building </h4> <a class="dropdown-button drop-down-meta drop-down-meta-inn" href="#" data-activates="dr-list"><i class="material-icons">more_vert</i></a>        
        <!-- Dropdown Structure -->
        <div class="split-row">
            <div class="col-md-12">
                <div class="box-inn-sp ad-inn-page">
                    <div class="tab-inn ad-tab-inn">
        <div class="hom-cre-acc-left hom-cre-acc-right">
            <div class="">
                <form class="" method="POST" action="{{ route('create_profile') }}" enctype="multipart/form-data">
                @csrf
                      <div class="input-field col s3">
                        <div class="form-group">                    
                            @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
      
                            <div class="file-upload-container">
                              <label class="form-label" for="address-st">Upload Passport</label>
                              <input type="file" name="passport" id="file-upload" class="form-control" id="address-st"  placeholder="Passport">
                              <div id="preview-container" class="preview-container"></div>
                            </div>
                        </div>
                      </div>
                    
                    

                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Firs Name</h6>
                            <input id="list_name" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" type="text" class="validate">
                            {{-- <label for="list_name">First Name</label> --}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Middle Name</h6>
                            <input id="last_name" placeholder="Middle Namw" type="text" name="last_name" value="{{ old('last_name') }}" class="validate">
                            {{-- <label for="last_name"> Middle Name </label> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Surname</h6>
                            <input id="surname" placeholder="Surname" type="text" name="surname" value="{{ old('surname') }}" class="validate">
                            {{-- <label for="surname"> Surname </label> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Phone</h6>
                            <input id="phone" placeholder="Phone" type="text" name="phone" value="{{ old('phone') }}" class="validate">
                            {{-- <label for="phone"> Phone </label> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Contact Email</h6>
                            <input id="email" placeholder="Contact Email" type="email" value="{{ old('email') }}" name="email" class="validate">
                            {{-- <label for="email">Contact Email</label> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Address</h6>
                            <input id="list_addr" placeholder="Address" type="text" value="{{ old('address') }}" name="address" class="validate">
                            {{-- <label for="list_addr"> Address  </label> --}}
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>State of Origin</h6>
                            <select name="state_of_origin">
                                <option value="" disabled selected> State of Origin </option>
                                <option value="Abia State">Abia State</option>
                                <option value="Adamawa State">Adamawa State</option>
                                <option value="Akwa Ibom State">Akwa Ibom State</option>
                                <option value="Anambra State">Anambra State</option>
                                <option value="Bauchi State">Bauchi State </option>
                                <option value="Benue State">Benue State</option>
                                <option value="Benin State">Benin State</option>
                                <option value="Delta State">Delta State</option>
                                <option value="Ekiti State">Ekiti State</option>
                                <option value="Enugu State">Enugu State</option>
                                <option value="Imo State">Imo State</option>
                                <option value="Lagos State">Lagos State</option>
                                <option value="Kwara State">Kwara State</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Local Government</h6>
                            <input id="email" type="text" placeholder="Local Government" value="{{ old('local_govt') }}" name="local_govt" class="validate">
                            {{-- <label for="email"> Local Government </label> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Gender</h6>
                            <select name="gender">
                                <option value="" disabled selected>Gender</option>
                                <option value="Male"> Male </option>
                                <option value="Female"> Female </option>
                                
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Occupation</h6>
                            <input id="occupation" placeholder="Occupation" type="text" value="{{ old('occupation') }}" name="occupation" class="validate">
                            {{-- <label for="occupation">  Occupation </label> --}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <h6>BVN</h6>
                            <input id="bvn" type="text" name="bvn" placeholder="BVN" value="{{ old('bvn') }}" class="validate">
                            {{-- <label for="bvn">  BVN </label> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Date of Birth</h6>
                            <input id="date_of_birth" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="validate">
                            {{-- <label for="date_of_birth">  Date of Birth </label> --}}
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Name of Next of Kin</h6>
                            <input id="name_of_nxt_of_kin" placeholder="Name of Next of Kin" type="text" value="{{ old('name_next_of_kin') }}" name="name_next_of_kin" class="validate">
                            {{-- <label for="Next of kin">  Name of Next of Kin </label> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Address of Next of Kin</h6>
                            <input id="addy_of_nxt_of_kin" placeholder="Address of Next of Kin" type="text" value="{{ old('addy_next_of_kin') }}" name="addy_next_of_kin" class="validate">
                            {{-- <label for="Address Next of kin">  Address of Next of Kin </label> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Email of Next of Kin</h6>
                            <input id="email_of_nxt_of_kin" placeholder="Email of Next of Kin" type="email" value="{{ old('email_next_of_kin') }}" name="email_next_of_kin" class="validate">
                            {{-- <label for="Next of kin">  Email of Next of Kin </label> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>Phone Number of Next of Kin</h6>
                            <input id="phone_of_nxt_of_kin" placeholder="Phone Number of Next of Kin" type="text" value="{{ old('phone_next_of_kin') }}" name="phone_next_of_kin" class="validate">
                            {{-- <label for="Phone Next of kin">  Phone of Next of Kin </label> --}}
                        </div>
                    </div>
                    
                   								
                   
                    								
                    <div class="row">
                        {{-- <div class="input-field col s12 v2-mar-top-40"> <a class="waves-effect waves-light btn-large full-btn" >Submit </a> </div> --}}
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('file-upload').addEventListener('change', function(event) {
        let previewContainer = document.getElementById('preview-container');
        console.log("Selected files:", event.target.files);

        previewContainer.innerHTML = ''; // Clear previous previews

        let files = event.target.files;
        if (files.length > 0) {
            for (let file of files) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    let preview = document.createElement('div');
                    preview.className = 'preview-box';
                    preview.innerHTML = `
                        <img src="${e.target.result}" alt="${file.name}">
                        <p>${file.name}</p>
                        <span>${(file.size / 1024).toFixed(1)}KB</span>
                        <button class="delete-btn" onclick="removeFile(this)">🗑️</button>
                    `;
                    previewContainer.appendChild(preview);
                };
                reader.readAsDataURL(file);
            }
        } else {
            previewContainer.innerHTML = '<p>No files selected yet...</p>';
        }
    });

    function removeFile(button) {
        button.parentElement.remove();
    }
</script>

@endsection