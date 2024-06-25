
<x-nav_foot_grocery>
    <x-slot name="title">Grocery List</x-slot>
    
    <section class="backgrnd">
    <div class="container outer-box">
        <div class="container box bg-white">
            <h2 class="display-4">Grocery List</h2>
            <form method="post" action="{{ route('saveItem') }}" id="grocery">
             {{ csrf_field() }}
            <input type="text" name="groceryitem" placeholder="Write Grocery Items" id="write-list">
            <button type="submit" class="btn btn-outline-primary">Add Item</button>
    </form>
                <ul id="list">
        @foreach($groceryLists as $groceryitem)
            <li>
                {{ $groceryitem->name }}
                <form method="post" action="{{ route('markComplete', $groceryitem->id) }}">
                    {{ csrf_field() }}
                <button class="delete"></button>
                </form>
            </li>
                @endforeach
                </ul>
            </div>
    </div>
</section>
<script src="{{ asset('listscript.js') }}" ></script>
</x-nav_foot_grocery>