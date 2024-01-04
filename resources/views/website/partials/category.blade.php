<div class="widget widget-search">
                                    <h3 class="widget-title">Search</h3><!-- End .widget-title -->

                                    <form action="#">
                                        <label for="ws" class="sr-only">Search in blog</label>
                                        <input type="search" class="form-control" name="ws" id="ws" placeholder="Search in blog" required>
                                        <button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">Search</span></button>
                                    </form>
                				</div><!-- End .widget -->

                                <div class="widget widget-cats">
                                    <h3 class="widget-title">Categories</h3><!-- End .widget-title -->
                                    @foreach ($categories as $category)
                                    <ul>
                                        <li><a href="#">{{ $category->name }}<span>{{ $posts->count() }}</span></a></li>
                                    </ul>
                                    @endforeach
                                </div><!-- End .widget -->