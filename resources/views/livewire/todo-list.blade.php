<div>
    @include('livewire.includes.create')
    @include('livewire.includes.search')
    <div id="todos-list">
       @foreach ($todos as $todo )
       @include('livewire.includes.todo-card')
           
       @endforeach

        <div class="my-2">
            <!-- Pagination goes here -->
        {{ $todos->links() }}
        </div>
    </div>
</div>
