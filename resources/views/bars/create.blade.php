<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2">Create a bar</h1>
            </div>
        </div>
        <div class="box">
            <form action="{{ route('bars.store') }}" method="POST">
                @csrf
                <h2 class="subtitle is-6 is-italic" >
                    Please fill out all the form fields and click 'Submit'
                </h2>

                {{-- Here are all the form fields --}}
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <div class="control">
                        <input type="text" name="name" placeholder="Enter your name please"
                               class="input" autocomplete="name" value="{{ old('name') }}" autofocus>
                </div>
                @error('name')
                <span>
                <i></i>
            </span>
            @enderror
        </div>
        @error('name')
        <p>{{ $message }}</p>
        @enderror

                <div class="field">
                    <label for="grault" class="label">grault</label>
                    <div class="control">
                        <input type="text" name="grault" placeholder="Enter a waldo"
                               class="input" autocomplete="grault" value="{{ old('grault') }}" autofocus>
                    </div>
                @error('grault')
                <span>
                <i></i>
            </span>
            @enderror
        </div>
        @error('grault')
        <p>{{ $message }}</p>
        @enderror

                <div class="field">
                    <label for="waldo" class="label">waldo</label>
                    <div class="control">
                        <input type="text" name="waldo" placeholder="Enter a waldo please"
                               class="input" autocomplete="waldo" value="{{ old('waldo') }}" autofocus>
                </div>
                @error('waldo')
                <span>
                <i></i>
            </span>
            @enderror
        </div>
        @error('waldo')
        <p>{{ $message }}</p>
        @enderror

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-primary">Save</button>
                    </div>
                    <div class="control">
                        <a type="button" href="{{ url()->previous() }}" class="button is-light">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-main>
