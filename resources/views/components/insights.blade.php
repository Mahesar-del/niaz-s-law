<!-- Insights And News -->
<h2 class="ct-section-title" style="text-align: left; margin-bottom: 20px;">Insights And News</h2>
<div class="ct-insights">
    @if(isset($capabilityPosts))
        @forelse($capabilityPosts as $post)
        <div class="ct-insight-card">
            @if($post->featured_image_url)<img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}">@endif
            <div class="ct-insight-content">
                <h3>{{ $post->title }}</h3>
                <p>{{ Str::limit(strip_tags($post->content), 160) }}</p>
                <a href="{{ route('blog.show',$post) }}" class="ct-btn-black">Read now</a>
            </div>
        </div>
        @empty
        <p>No insights have been added for this capability yet.</p>
        @endforelse
    @else
    <!-- Insight 1 -->
    <div class="ct-insight-card">
        <img src="{{ asset('images/domestic-violance.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&q=80&w=400'" alt="Justice Statue">
        <div class="ct-insight-content">
            <h3>Domestic Violence in California – How a Lawyer Can Help</h3>
            <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
            <a href="#" class="ct-btn-black">Read now</a>
        </div>
    </div>
    <!-- Insight 2 -->
    <div class="ct-insight-card">
        <img src="{{ asset('images/order.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1589391886645-d51941baf7fb?auto=format&fit=crop&q=80&w=400'" alt="Gavel">
        <div class="ct-insight-content">
            <h3>Domestic Violence in California – How a Lawyer Can Help</h3>
            <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
            <a href="#" class="ct-btn-black">Read now</a>
        </div>
    </div>
    @endif
</div>
