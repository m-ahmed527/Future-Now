@extends('layout.front-layout')
@section('title', 'Login')
@section('content')
    <div class="edit-user">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="user-details">
                        <div class="profile-img">
                            <img src="./assets/images/user-profile.png" alt="">
                            <button data-bs-toggle="modal" data-bs-target="#PictureModal"><img
                                    src="./assets/images/Vector.png" alt=""></button>
                            <!-- modal -->
                        </div>
                        <div class="profileForm">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="animated-input">
                                            <input type="text" required>
                                            <label>first name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="animated-input">
                                            <input type="text" required>
                                            <label>last name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="animated-input">
                                            <input type="text" required>
                                            <label>Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="animated-input input-group input-group-sm">
                                            <input id="mobile" type="tel" placeholder="090 9 983 73 7" name="mobile"
                                                class="my-3 py-3 px-4" autofocus required>
                                        </div>
                                    </div>
                                </div>
                                <button class="profile-primary-btn" data-bs-toggle="modal"
                                    data-bs-target="#updatePassDone">Update</button>
                                <button class="profile-secondary-btn">Edit Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <div class="modal fade" id="PictureModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="user-modal-body">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"> <img src="./assets/images/Vector.png" alt=""></label>
                            </div>
                            <div class="avatar-preview userpic-preview">
                                <div id="imagePreview" style="background-image: url({{asset('assets/user/images/user-profile.png')}});">
                                </div>
                            </div>
                        </div>
                        <button class="profile-primary-btn" data-bs-toggle="modal" data-bs-target="#updateProfilePic">Change
                            Picture</button>
                        <button class="profile-secondary-btn" data-bs-toggle="modal" data-bs-target="#updatePicModal">Edit
                            Picture</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="user-modal-body">
                        <img src="./assets/images/check-one.png" alt="">
                        <h5>Picture changed successfull!</h5>
                        <button class="profile-primary-btn" style="padding: 10px 188px;">oK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="DoneModal modal fade" id="updatePicDone" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class=" modal-dialog">
                <div class="modal-content">
                    <div class="DoneModalHeader modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('assets/user/images/check-one.png')}}" alt="">
                        <h1>Picture changed successfull!</h5>

                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="profile-primary-btn" style="padding: 10px 188px;" data-bs-dismiss="modal"
                            aria-label="Close">oK</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="DoneModal modal fade" id="updatePassDone" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class=" modal-dialog">
                <div class="modal-content">
                    <div class="DoneModalHeader modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('assets/user/images/check-one.png')}}" alt="">
                        <h1>Picture changed successfull!</h5>

                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="profile-primary-btn" style="padding: 10px 188px;" data-bs-dismiss="modal"
                            aria-label="Close">oK</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="updateProfilePic" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class=" modal-dialog">
                <div class="modal-content">
                    <div class="changeImageHeader modal-header">
                        <h1 class="modal-title text-center fs-5" id="exampleModalLabel">Choose Picture</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ImageWrapper">
                            <div class="profileImage text-center">
                                <img src="{{asset('assets/user/images/change-image.png')}}" id="changeImage" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="modal-btn" data-bs-toggle="modal" data-bs-target="#updatePicDone">Apply</button>
                        <button class="modal-btn-sec">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="updatePicModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class=" modal-dialog">
                <div class="modal-content">
                    <div class="changeImageHeader modal-header">
                        <h1 class="modal-title text-center fs-5" id="exampleModalLabel">Crop Picture</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="editImageWrapper">
                            <div class="editImage text-center" id="editImage">
                                <!-- <img src="./assets/images/change-image.png" id="changeImage" alt=""> -->
                            </div>
                        </div>
                    </div>
                    <div class="range">
                        <i class="fa-solid fa-image first-image-i"></i>
                        <input type="range" value="1" min="1" max="100" class="progress">
                        <i class="fa-solid fa-image sec-image-i"></i>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="modal-btn-sec">Crop</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="DoneModal modal fade" id="PackageSelect" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class=" modal-dialog">
                <div class="modal-content">
                    <div class="DoneModalHeader modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('assets/user/images/check-one.png')}}" alt="">
                        <h1>Picture changed successfull!</h5>

                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="profile-primary-btn" style="padding: 10px 188px;" data-bs-dismiss="modal"
                            aria-label="Close">oK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                let imageDiv = document.getElementById('changeImage');
                let editImage = document.getElementById('editImage')
                reader.onload = function(e) {
                    imageDiv.src = e.target.result
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#editImage').css('background', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
        $(function() {
            var code = "";
            $('#mobile').val(code);
            $('#mobile').intlTelInput({
                autoHideDialCode: true,
                autoPlaceholder: "ON",
                dropdownContainer: document.body,
                formatOnDisplay: true,
                initialCountry: "us",
                placeholderNumberType: "MOBILE",
                preferredCountries: ['us', 'gb', 'in'],
                separateDialCode: true
            });
            $('#btn-submit').on('click', function() {
                var code = $("#mobile").intlTelInput("getSelectedCountryData").dialCode;
                var phoneNumber = $('#mobile').val();
                document.getElementById("code").innerHTML = code;
                document.getElementById("mobile-number").innerHTML = phoneNumber;
            });
        });


        const progress = document.querySelector('.progress');
        const edit = document.getElementById('editImage')

        progress.addEventListener('input', function() {
            const value = Number(this.value);
            let bgSize = 230 + value;
            console.log(bgSize)
            edit.style.backgroundSize = `${bgSize}px`
            this.style.background =
                `linear-gradient(to right, #F71A1A 0%, #F71A1A ${value}%, gray ${value}%, gray 100%)`
        })
    </script>
@endpush
