<x-layout>
    <h1>Create</h1>
    <form method="POST" action="{{ route('buyer.store') }}">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>
    </div>
    <div>
        <label for="address">Home Address:</label>
        <input type="add" id="address" name="address" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit">Submit</button>
</form>
</x-layout>