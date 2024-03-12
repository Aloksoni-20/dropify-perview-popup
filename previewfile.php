@extends('layouts.header')
@section('styles') 
@endsection
@section('content')


<!-- :: client information head -->
<div class="app-title">
	<div class="user-dashboard-welcome">
		<h1>Hello @php echo ucfirst(Auth::user()->name); @endphp</h1>
      <!-- ::<h5 class="mt-10 mb-5px">Enter the Document Upload Zone: Seamlessly Submit and Organize Your Files! </h5> -->
		<h5 class="mt-10 mb-5px">Submit Documents </h5>
	</div>
	<div class="user-dashboard-welcome-d-image d-none-sm">
		<!-- :: image top head dashboard  -->
		<img class="paymenttop-image" src="{{ URL::asset('assets/img/documents.png') }}">
	</div>
</div>
<!-- :: end client information head -->
<!-- :: document upload section  -->
<section class="upload-document mt-58">
	<div class="row justify-content-center">
		<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
			<div class="tile-x">
				<div class="tile-body">
					<div class="case-status upload-doc-head text-center ">
						<h2>Upload Document</h2>
					</div>
				</div>
				<div class="row p-1020">
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
						<!-- :: upload form -->
						 
						@if($message = Session::get('success'))
                    
                                <div class="alert p-2 alert-success alert-dismissible" role="alert">
                                  {{ $message }}
                                  <button type="button" class="float-right btn-close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
                                </div>
                        @endif
                        @if($message = Session::get('error'))
                    
                                <div class="alert p-2 alert-danger alert-dismissible" role="alert">
                                  {{ $message }}
                                  <button type="button" class="float-right btn-close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
                                </div>
                        @endif
						<form action="{{route('upload-document')}}" method="POST" enctype="multipart/form-data">
	    					@csrf
	  
							<!-- field col  start :: dropify-->
							<div class="form-group mb-0 pb-0">
								<!-- <label class="form-head mb-2" for="exampletext"> Upload File </label> -->
								
                              	<input name="pdf_file[]" id="pdf_file" type="file" class="dropify" data-height="100" required multiple/>
                                <!-- ::<input name="pdf_file[]" type="file" class="dropify"  data-height="100" data-allowed-file-extensions="pdf" accept="application/pdf"  required multiple/>-->
								<small class="form-text text-muted upload-info mt-2"> Maximum Document Size : Up to 6MB per upload (PDF Only)</small>
							</div>
                           <ul id="selectedFileList"></ul> 
                           
                          <!-- preview button -->
                          <!--  <button type="button" class="btn btn-primary" id="previewBtn">Preview Selected Files</button> -->
                         
							<div class="text-center mt-3">
									<button type="submit" class="cnt-pay-btn">Upload PDF</button>
							</div>
									
							<!-- :: field col  end :: dropify-->
						</form>
                  <div class="payment-info text-center mt-4">
				<p style="
    font-size: 0.9rem;
">If you have questions or need help, please contact us:</p>
				<div class="flex-container justify-content-center mb-3 d-flex" style="
    white-space: nowrap;
">
					<div style="
    font-size: 0.8rem;
">
						<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
							<path d="M8.4375 1.25C8.4375 1.25 9.89625 1.3825 11.7519 3.23875C13.6081 5.095 13.7406 6.55312 13.7406 6.55312M8.87937 3.46C8.87937 3.46 9.49812 3.63625 10.4262 4.56437C11.3544 5.4925 11.5313 6.11125 11.5313 6.11125" stroke="#333333" stroke-linecap="round"></path>
							<path d="M9.7225 9.09186L9.3825 8.76936L9.7225 9.09249V9.09186ZM11.8763 12.6587L11.5356 12.3356L11.8756 12.6587H11.8763ZM11.0475 13.1025L11.0938 13.5681L11.0475 13.1019V13.1025ZM2.345 4.32811C2.34168 4.26664 2.32628 4.20642 2.29968 4.1509C2.27308 4.09537 2.23581 4.04563 2.18999 4.00451C2.14417 3.96339 2.0907 3.9317 2.03263 3.91125C1.97457 3.89079 1.91304 3.88198 1.85156 3.8853C1.79009 3.88862 1.72987 3.90402 1.67435 3.93062C1.61882 3.95722 1.56908 3.99449 1.52796 4.04031C1.48684 4.08613 1.45515 4.1396 1.4347 4.19767C1.41424 4.25573 1.40543 4.31726 1.40875 4.37874L2.345 4.32811ZM2.94875 1.93249C2.86667 2.0232 2.8233 2.14241 2.82791 2.26466C2.83251 2.38691 2.88473 2.50251 2.97341 2.58679C3.0621 2.67106 3.18021 2.71733 3.30254 2.71571C3.42486 2.71409 3.54171 2.66471 3.62812 2.57811L2.94875 1.93249ZM6.665 12.3825C6.71712 12.4161 6.77539 12.439 6.83643 12.4499C6.89748 12.4608 6.96008 12.4595 7.02061 12.4461C7.08114 12.4326 7.1384 12.4073 7.18908 12.3715C7.23976 12.3358 7.28284 12.2904 7.31583 12.2379C7.34882 12.1854 7.37107 12.1268 7.38128 12.0657C7.39149 12.0045 7.38946 11.9419 7.37532 11.8815C7.36117 11.8212 7.33519 11.7642 7.29887 11.7139C7.26256 11.6637 7.21663 11.6211 7.16375 11.5887L6.665 12.3825ZM9.44562 12.5362C9.32387 12.5108 9.197 12.5348 9.09292 12.6029C8.98884 12.671 8.91607 12.7776 8.89062 12.8994C8.86518 13.0211 8.88914 13.148 8.95724 13.2521C9.02534 13.3562 9.132 13.4289 9.25375 13.4544L9.44562 12.5362ZM9.77812 9.71499L10.0625 9.41499L9.3825 8.76936L9.09812 9.06936L9.77812 9.71499ZM10.9994 9.28874L12.1931 9.97624L12.6606 9.16374L11.4669 8.47624L10.9994 9.28874ZM12.4237 11.4012L11.5356 12.3356L12.2156 12.9819L13.1031 12.0469L12.4237 11.4012ZM5.22437 9.97436C2.80187 7.42374 2.39562 5.27186 2.345 4.32811L1.40875 4.37874C1.47125 5.53499 1.96125 7.89999 4.545 10.62L5.22437 9.97436ZM6.08437 5.82624L6.26312 5.63749L5.58375 4.99186L5.40437 5.18061L6.08437 5.82624ZM6.40437 3.28749L5.61625 2.17311L4.85062 2.71436L5.63812 3.82874L6.40437 3.28749ZM5.74375 5.50311C5.63126 5.39471 5.51772 5.28741 5.40312 5.18124L5.40187 5.18249L5.4 5.18436C5.3889 5.19584 5.37847 5.20795 5.36875 5.22061C5.30748 5.30171 5.259 5.39171 5.225 5.48749C5.16375 5.65936 5.13125 5.88686 5.1725 6.17061C5.25375 6.72811 5.61937 7.47749 6.57375 8.48311L7.25375 7.83686C6.36125 6.89749 6.14125 6.31936 6.1 6.03436C6.08 5.89686 6.1 5.82499 6.10812 5.80186L6.11312 5.78999C6.10801 5.79822 6.10215 5.80596 6.09562 5.81311C6.09196 5.81736 6.08821 5.82215 6.08437 5.82624L5.74375 5.50311ZM6.57375 8.48249C7.52562 9.48499 8.24437 9.87874 8.7925 9.96811C9.07437 10.0137 9.3025 9.97686 9.475 9.90874C9.57058 9.87122 9.65944 9.81845 9.73812 9.75249L9.76062 9.73124L9.76937 9.72249C9.77085 9.72126 9.77231 9.72001 9.77375 9.71874L9.77562 9.71686L9.77625 9.71561C9.77625 9.71561 9.7775 9.71499 9.4375 9.39186C9.0975 9.06936 9.09812 9.06874 9.09812 9.06811L9.09937 9.06749L9.10062 9.06561L9.10437 9.06249C9.11382 9.05336 9.12362 9.0446 9.13375 9.03624C9.13937 9.03249 9.13875 9.03374 9.13062 9.03686C9.11812 9.04186 9.06187 9.06186 8.94312 9.04249C8.69187 9.00124 8.14937 8.77999 7.25375 7.83686L6.57375 8.48249ZM5.61625 2.17311C4.9825 1.27686 3.715 1.12499 2.94875 1.93249L3.62812 2.57811C3.955 2.23436 4.53062 2.26124 4.85062 2.71436L5.61625 2.17311ZM11.5356 12.3356C11.3613 12.5194 11.1794 12.6181 11.0019 12.6356L11.0938 13.5681C11.5606 13.5225 11.9388 13.2737 12.2156 12.9819L11.5356 12.3362V12.3356ZM6.26312 5.63749C6.86812 5.00061 6.91062 4.00436 6.40437 3.28749L5.63875 3.82874C5.9025 4.20186 5.86187 4.69936 5.58375 4.99186L6.26312 5.63749ZM12.1931 9.97624C12.7063 10.2719 12.8069 10.9981 12.4237 11.4012L13.1031 12.0469C13.9188 11.1881 13.6806 9.75124 12.6606 9.16374L12.1931 9.97624ZM10.0625 9.41499C10.3031 9.16124 10.6788 9.10436 10.9994 9.28874L11.4669 8.47624C10.78 8.08124 9.92937 8.19436 9.3825 8.76936L10.0625 9.41499ZM7.16375 11.5887C6.54937 11.2025 5.895 10.68 5.22437 9.97436L4.545 10.62C5.26625 11.3794 5.98062 11.9525 6.665 12.3825L7.16375 11.5887ZM11.0012 12.6356C10.4807 12.6813 9.95616 12.6478 9.44562 12.5362L9.25375 13.4544C9.85779 13.5852 10.4782 13.6236 11.0938 13.5681L11.0019 12.6356H11.0012Z" fill="#333333"></path>
						</svg>
						<a href="tel:888-235-0004" class="tel">888-235-0004</a>
					</div>
					<div style="
    font-size: 0.8rem;
">
						<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M2 3.71422V10.5714C2 11.026 2.18061 11.4621 2.5021 11.7836C2.82359 12.105 3.25963 12.2857 3.71429 12.2857H12.2857C12.7404 12.2857 13.1764 12.105 13.4979 11.7836C13.8194 11.4621 14 11.026 14 10.5714V3.71422C14 3.25957 13.8194 2.82353 13.4979 2.50204C13.1764 2.18055 12.7404 1.99994 12.2857 1.99994H3.71429C3.25963 1.99994 2.82359 2.18055 2.5021 2.50204C2.18061 2.82353 2 3.25957 2 3.71422Z" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M3.71431 4.57162L8.00002 7.14305L12.2857 4.57162" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
						<a href="mailto:info@clearstarttax.com" class="tel">info@clearstarttax.com</a>
					</div>
				</div>
			</div>
					</div>
                  
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Preview Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="previewModalLabel">Selected Files Preview</h5>
				<button type="button" class="close cst-close-pvm" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!-- Preview container -->
				<div id="previewContainer"></div>
			</div>
			<div class="modal-footer jscmb">
				<button type="button" class="close pdf-pv-close" data-dismiss="modal" >Close Preview</button>
				<button type="button" class="pdf-pvm-select" id="selectFilesBtn">Select More File</button>
			</div>
		</div>
	</div>
</div>

<!--::alert for doc update -->
<div class="modal fade pay-alert" id="doc-update-alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered payment-dialog" role="document">
		<div class="modal-content pay-confirmation">
			<div class="modal-body pay-confirm-alert-body">
				<div class="alert-box">
					<div class="pay-alert-image text-center">
						<img class="w-100px" src="{{ URL::asset('assets/img/document-alert.png') }}">
					</div>
					<div class="pay-alert-content text-center">
						<h2>Congratulations!</h2>
						<p>Your document has been successfully uploaded.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('scripts')  

<script src="{{ URL::asset('assets/js/plugins/dropify.min.js') }}"></script>
<script>
        // Initialize Dropify on the file input element
        $('.dropify').dropify();

        // Function to display preview for selected files in a modal
        function displayPreview() {
            $('#previewContainer').empty();

            // Loop through selected files and display their previews
            for (let i = 0; i < this.files.length; i++) {
                const file = this.files[i];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const embed = document.createElement('embed');
                    embed.src = e.target.result;
                    embed.width = "100%";
                    embed.height = "500";
                    embed.type = "application/pdf";
                    $('#previewContainer').append(embed);
                };

                reader.readAsDataURL(file);
            }

            // Open the modal to display previews
            $('#previewModal').modal('show');
        }

        $('#pdf_file').on('change', function() {
            $('#selectedFileList').empty();

            // Loop through selected files and display their names
            for (let i = 0; i < this.files.length; i++) {
                const fileName = this.files[i].name;
                $('#selectedFileList').append('<li>' + fileName + '</li>');
            }

            displayPreview.call(this);
        });

        // Bind click event to the "Preview Selected Files" button
        $('#previewBtn').on('click', displayPreview);

        // Function to handle select files button click
        $('#selectFilesBtn').on('click', function() {
            $('#pdf_file').trigger('click');
        });

        // Function to handle close modal button click
        $('#closeModalBtn').on('click', function() {
            $('#pdf_file').val('');
            $('#selectedFileList').empty();
        });
    </script>



@endsection

			
	