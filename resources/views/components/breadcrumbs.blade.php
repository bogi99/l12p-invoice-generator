<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <div class="flex flex-col">
        <ol class="breadcrumb flex flex-row gap-3">
            <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
            <?php $segments = ''; ?>
            @foreach (Request::segments() as $segment)
                <?php $segments .= '/' . $segment; ?>
                <li>
                    <a href="{{ $segments }}">{{ $segment }}</a>
                </li>
            @endforeach
        </ol>
    </div>
</div>
