<div class="widget">
    <h3 class="widget-title">Popular Posts</h3><!-- End .widget-title -->                         
            @if (count($latestPosts) > 0)
            @foreach ($latestPosts as $post)
                <ul class="posts-list">
                    <li>
                        <figure>
                                <a href="{{ route('single.page', $post->id) }}">
                                    <img src="/postImage/{{ $post->image }}" alt="post">
                                </a>
                        </figure>

                        <div>
                            <span>{{ date('d M Y', strtotime($post->created_at)) }}</span>
                            <h4><a href="#">{{ Str::limit($post->description, 11) }}</a></h4>
                        </div>
                    </li>
                </ul><!-- End .posts-list -->
            @endforeach
            @else
                <h3 class="text-center text-danger">No post data yet</h3>
            @endif                              
</div><!-- End .widget -->