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
        <h4>Add New Property / Project</h4> <a class="dropdown-button drop-down-meta drop-down-meta-inn" href="#" data-activates="dr-list"><i class="material-icons">more_vert</i></a>
     
        
        <!-- Dropdown Structure -->
        <div class="split-row">
            <div class="col-md-12">
                <div class="box-inn-sp ad-inn-page">
                    <div class="tab-inn ad-tab-inn">
        <div class="hom-cre-acc-left hom-cre-acc-right">
            <div class="">
                <form action="{{ route('listing.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    
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
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="project_title" name="project_title" type="text" class="validate">
                            <label for="list_name">Project Title</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="phone" type="text" name="phone" class="validate">
                            <label for="list_phone">Contact Phone</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" class="validate">
                            <label for="email">Contact Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list_addr" type="text" name="address" class="validate">
                            <label for="list_addr"> Location (Address) </label>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="city">
                                <option value="" disabled selected>Choose your city</option>
                                <option value="">Abia State</option>
                                <option value="">Adamawa State</option>
                                <option value="">Akwa Ibom State</option>
                                <option value="">Anambra State</option>
                                <option value="">Bauchi State </option>
                                <option value="">Benue State</option>
                                <option value="">Benin State</option>
                                <option value="">Delta State</option>
                                <option value="">Ekiti State</option>
                                <option value="">Enugu State</option>
                                <option value="">Imo State</option>
                                <option value="">Lagos State</option>
                                <option value="">Kwara State</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="category">
                                <option value="" disabled selected>Select Category</option>
                                <option value="Rent"> Rent </option>
                                <option value="Sales"> Sales </option>
                                <option value="Lease"> Lease </option>
                                <option value="Rent to Own"> Rent to Own </option>
                                <option value="Project"> Project </option>
                                <option value="Services"> Services </option>
                                
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list_addr" type="number" step="0.1" name="price" class="validate">
                            <label for="list_addr"> Amount Required </label>
                        </div>
                    </div>

                     <div class="row">
                        <div class="input-field col s12">
                            <input id="list_addr" type="number" step="0.1" name="price" class="validate">
                            <label for="list_addr"> Return On Investment </label>
                        </div>
                    </div>
                     <div class="row">
                        <div class="input-field col s12">
                            <input id="list_addr" type="text" name="duration" class="validate">
                            <label for="list_addr"> Project Duration (Month) </label>
                        </div>
                    </div>
                     <div class="row">
                        <div class="input-field col s12">
                            <input id="list_addr" type="number" step="0.1" name="price" class="validate">
                            <label for="list_addr"> Price </label>
                        </div>
                    </div>


                    <div class="row"> </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
                            <label for="textarea1"> Descriptions</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="db-v2-list-form-inn-tit">
                            <h5> Project Video Tracking Link </h5>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="youtube_link" placeholder="YouTube Video Link" class="validate">
                            <label>Youtube Video Link</label>
                        </div>
                    </div>	
                    
                    <div class="row">
                        <div class="db-v2-list-form-inn-tit">
                            <h5>Google Map:</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="google_map" class="validate">
                            <label>Past your iframe code here</label>
                        </div>
                    </div>
                   								
                    <div class="row">
                        <div class="db-v2-list-form-inn-tit">
                            <h5>Cover Image <span class="v2-db-form-note">(image size 1350x500):<span></h5>
                        </div>
                    </div>
                    <div class="row tz-file-upload">
                        <div class="file-field input-field">
                            <div class="tz-up-btn"> <span>File</span>
                                <input type="file" name="cover_image"> </div>
                            <div class="file-path-wrapper db-v2-pg-inp">
                                <input class="file-path validate" type="text"> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="db-v2-list-form-inn-tit">
                            <h5>Photo Gallery <span class="v2-db-form-note">(upload multiple photos note:size 750x500):<span></h5>
                        </div>
                    </div>
                    {{-- <div class="row tz-file-upload">
                        <div class="file-field input-field">
                            <div class="tz-up-btn"> <span>File</span>
                                <input type="file" name="photo_gallery[]" multiple> </div>
                            <div class="file-path-wrapper db-v2-pg-inp">
                                <input class="file-path validate" type="text"> 
                            </div>
                        </div>
                    </div>		 --}}
                    <div class="file-upload-container">
                        {{-- <label class="form-label" for="address-st">Upload Other Documents</label> --}}
                        <input type="file" name="photo_gallery[]" id="file-upload" multiple class="form-control" id="address-st"  placeholder="Photo Gallery">
                        <div id="preview-container" class="preview-container"></div>
                      </div>							
                    <div class="row">
                        <div class="db-v2-list-form-inn-tit">
                            <h5> Project / Property Features <span class="v2-db-form-note">(Enter service name and upload service image note:size 400x250):<span>:</h5>
                        </div>
                    </div>	
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" name="feature1" class="validate">
                            <label> Feature Part: Front view </label>
                        </div>
                        {{-- <div class="col s6">
                            <div class="row tz-file-upload">
                                <div class="file-field input-field">
                                    <div class="tz-up-btn"> <span>File</span>
                                        <input type="file" name="feature_1"> 
                                    </div>
                                    <div class="file-path-wrapper db-v2-pg-inp">
                                        <input class="file-path validate" type="text" name="feature1"> 
                                    </div>
                                </div>
                            </div>
                        </div>										 --}}
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" name="feature2" class="validate">
                            <label>Feature Part: Side View</label>
                        </div>
                        {{-- <div class="col s6">
                            <div class="row tz-file-upload">
                                <div class="file-field input-field">
                                    <div class="tz-up-btn"> <span>File</span>
                                        <input type="file" name="feature_2"> </div>
                                    <div class="file-path-wrapper db-v2-pg-inp">
                                        <input class="file-path validate" type="text" name="feature2"> 
                                    </div>
                                </div>
                            </div>
                        </div>										 --}}
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" name="feature3" class="validate">
                            <label>Feature Part: Adjacent View</label>
                        </div>
                        {{-- <div class="col s6">
                            <div class="row tz-file-upload">
                                <div class="file-field input-field">
                                    <div class="tz-up-btn"> <span>File</span>
                                        <input type="file" name="feature_3"> </div>
                                    <div class="file-path-wrapper db-v2-pg-inp">
                                        <input class="file-path validate" type="text" name="feature3"> 
                                    </div>
                                </div>
                            </div>
                        </div>										 --}}
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" name="feature4" class="validate">
                            <label>Feature Part: Interior</label>
                        </div>
                        {{-- <div class="col s6">
                            <div class="row tz-file-upload">
                                <div class="file-field input-field">
                                    <div class="tz-up-btn"> <span>File</span>
                                        <input type="file" name="feature_4"> </div>
                                    <div class="file-path-wrapper db-v2-pg-inp">
                                        <input class="file-path validate" type="text" name="feature4"> 
                                    </div>
                                </div>
                            </div>
                        </div>										 --}}
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" name="feature5" class="validate">
                            <label>Feature Part: Exterior </label>
                        </div>
                        {{-- <div class="col s6">
                            <div class="row tz-file-upload">
                                <div class="file-field input-field">
                                    <div class="tz-up-btn"> <span>File</span>
                                        <input type="file" name="feature_5"> </div>
                                    <div class="file-path-wrapper db-v2-pg-inp">
                                        <input class="file-path validate" type="text" name="feature5"> 
                                    </div>
                                </div>
                            </div>
                        </div>										 --}}
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" name="feature6" class="validate">
                            <label>Feature Part: General View</label>
                        </div>
                        {{-- <div class="col s6">
                            <div class="row tz-file-upload">
                                <div class="file-field input-field">
                                    <div class="tz-up-btn"> <span>File</span>
                                        <input type="file" name="feature_6"> </div>
                                    <div class="file-path-wrapper db-v2-pg-inp">
                                        <input class="file-path validate" name="feature6" type="text"> 
                                    </div>
                                </div>
                            </div>
                        </div>										 --}}
                    </div>									
                    <div class="row">
                        <button class="input-field col s12 v2-mar-top-40 btn-large full-btn"> Submit </button>
                        {{-- <div > <a class="waves-effect waves-light " >Submit </a> </div> --}}
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