<x-layout>
    <h1>This is for all the users</h1>
    <a href="/buyer">Buyer</a>
    <button><a  href="/seller">Seller</a></button>
    <h1>Create</h1>
    <form method="POST" action="{{ route('user.store') }}">
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
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit">Submit</button>
</form>
</x-layout>