<div class="col-lg-9">
                            <article class="entry entry-list">
                                <div class="row align-items-center">
                                    @foreach ($posts as $post)
                                        <div class="col-md-5">
                                            <figure class="entry-media">
                                                <a href="{{ route('single.page', $post->id) }}">
                                                    <img src="/postImage/{{ $post->image }}" alt="image desc">
                                                </a>
                                            </figure><!-- End .entry-media -->
                                        </div><!-- End .col-md-5 -->

                                        <div class="col-md-7">
                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <span class="entry-author">
                                                        by <a href="#">{{ $post->name }}</a>
                                                    </span>
                                                    <span class="meta-separator">|</span>
                                                    <a href="#">{{ date('d M Y', strtotime($post->created_at)) }}</a>
                                                    <span class="meta-separator">|</span>
                                                    <a href="#">2 Comments</a>
                                                </div><!-- End .entry-meta -->

                                                <h2 class="entry-title">
                                                    <a href="{{ route('single.page', $post->id) }}">{{ $post->title }}</a>
                                                </h2><!-- End .entry-title -->

                                                <div class="entry-cats">
                                                    in <a href="#">{{ $post->category->name }}</a>,
                                                </div><!-- End .entry-cats -->

                                                <div class="entry-content">
                                                    <p>{{ Str::limit($post->description, 150) }}</p>
                                                    <a href="{{ route('single.page', $post->id) }}" class="read-more">Continue Reading</a>
                                                </div><!-- End .entry-content -->
                                            </div><!-- End .entry-body -->
                                        </div><!-- End .col-md-7 -->
                                    @endforeach
                                </div><!-- End .row -->
                            </article><!-- End .entry -->

                            


                			<nav aria-label="Page navigation">
							    <ul class="pagination">
							        <li class="page-item disabled">
							            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
							                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
							            </a>
							        </li>
							        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
							        <li class="page-item"><a class="page-link" href="#">2</a></li>
							        <li class="page-item">
							            <a class="page-link page-link-next" href="#" aria-label="Next">
							                Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
							            </a>
							        </li>
							    </ul>
							</nav>
                		</div><!-- End .col-lg-9 -->