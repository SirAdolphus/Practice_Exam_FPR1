<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2">All the bars</h1>
            </div>
            <div class="column">
                <a href="{{ route('bars.create') }}" class="button is-primary is-pulled-right">
                    Add bar
                </a>
            </div>
        </div>
    </div>

    @foreach($bars as $bar)
        <article class="media">
            <div class="media-content">
                <div class="content">
                    <p>
                        <a href="{{ route('bars.show', $bar) }}">
                            <strong>{{ $bar->name }}</strong>
                        </a>
                        <small>{{ $bar->created_at->diffForHumans() }}</small>
                        <br>
                        {{ $bar->waldo }}
                        <br>
                        <small>grault: {{ $bar->grault }}</small>
                    </p>
                </div>
            </div>
        </article>
    @endforeach
</x-main>
