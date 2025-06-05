<div wire:poll.5s>
    @forelse ($posts as $post)
        <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="user-post-data">
                        <div class="d-flex justify-content-between">
                            <div class="me-3">
                                <img src="{{ $post->user->profile_photo_url }}" alt="User Photo"
                                    style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">

                            </div>
                            <div class="w-100">
                                <div class="d-flex  justify-content-between">
                                    <div class="">
                                        <h5 class="mb-0 d-inline-block">{{ $post->user->name }}</h5>

                                        <p class="mb-0 text-primary">{{ $post->created_at->diffForHumans() }}</p>
                                        <p>{{ $post->location }}</p>
                                    </div>


                                    {{-- <div class="card-post-toolbar">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" id="postdata-5" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" role="button">
                                                <i class="ri-more-fill"></i>
                                            </span>
                                            <div class="dropdown-menu m-0 p-0" aria-labelledby="postdata-5">
                                                <a class="dropdown-item p-3" href="#">
                                                    <div class="d-flex align-items-top">
                                                        <i class="ri-save-line h4"></i>
                                                        <div class="data ms-2">
                                                            <h6>Save Post</h6>
                                                            <p class="mb-0">Add this to your saved
                                                                items</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                    <div class="d-flex align-items-top">
                                                        <i class="ri-close-circle-line h4"></i>
                                                        <div class="data ms-2">
                                                            <h6>Hide Post</h6>
                                                            <p class="mb-0">See fewer posts like
                                                                this.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                    <div class="d-flex align-items-top">
                                                        <i class="ri-user-unfollow-line h4"></i>
                                                        <div class="data ms-2">
                                                            <h6>Unfollow User</h6>
                                                            <p class="mb-0">Stop seeing posts but
                                                                stay friends.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                    <div class="d-flex align-items-top">
                                                        <i class="ri-notification-line h4"></i>
                                                        <div class="data ms-2">
                                                            <h6>Notifications</h6>
                                                            <p class="mb-0">Turn on notifications
                                                                for this post</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>{{ $post->post }}</p>
                    </div>
                    <div class="user-post">
                        @php
                            $media = json_decode($post->media, true) ?? [];
                        @endphp
                        @foreach ($media as $mediaPath)
                            <a href="javascript:void();"><img src="{{ asset('storage/' . $mediaPath) }}"
                                    alt="post-image" class="img-fluid rounded w-100"></a>
                        @endforeach
                    </div>
                    <div class="comment-area mt-3">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="like-block position-relative d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="like-data">
                                        <div class="dropdown">
                                            <span wire:click="like({{ $post->id }})" style="cursor: pointer;">
                                                <img src="{{ asset('assets/images/icon/01.png') }}" class="img-fluid"
                                                    alt="Like icon" />
                                                <span>{{ $post->likes }}</span>
                                            </span>
                                            {{-- <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" role="button">
                                                <img src="../assets/images/icon/01.png" class="img-fluid"
                                                    alt="">
                                            </span> --}}
                                            {{-- <div class="dropdown-menu py-2">
                                                <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Like"><img
                                                        src="../assets/images/icon/01.png" class="img-fluid"
                                                        alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Love"><img
                                                        src="../assets/images/icon/02.png" class="img-fluid"
                                                        alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Happy"><img
                                                        src="../assets/images/icon/03.png" class="img-fluid"
                                                        alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="HaHa"><img
                                                        src="../assets/images/icon/04.png" class="img-fluid"
                                                        alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Think"><img
                                                        src="../assets/images/icon/05.png" class="img-fluid"
                                                        alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Sade"><img
                                                        src="../assets/images/icon/06.png" class="img-fluid"
                                                        alt=""></a>
                                                <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Lovely"><img
                                                        src="../assets/images/icon/07.png" class="img-fluid"
                                                        alt=""></a>
                                            </div> --}}
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                    aria-controls="share-btn"><i class="ri-share-line"></i>
                                    <span class="ms-1">Share</span></a>
                            </div>
                        </div>
                        <hr>

                        <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                            <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                            <div class="comment-attagement d-flex">
                                <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                                <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                                <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-sm-12">
            No posts found.
        </div>
    @endforelse
</div>
