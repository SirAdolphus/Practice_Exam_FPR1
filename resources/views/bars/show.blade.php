<x-article>
    <div class="column">
        <form method="POST" action={{ route("bars.destroy", $bar) }}>
            @csrf
            @method('DELETE')
        <button class="button is-family-secondary is-pulled-right">
            Delete
        </button>
        </form>
        <a href="{{ route('bars.edit', $bar) }}" class="button is-primary is-pulled-right">
            Edit bar
        </a>
    </div>
    <p> Created at:{{ $bar->created_at }}</p>
    <p> Name: {{ $bar->name }}</p>
    <p> Grault: {{ $bar->grault }}</p>

    <article class="waldo">
        {!! $bar->waldo !!}
    </article>

</x-article>
