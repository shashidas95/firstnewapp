<h1>I am from contact file</h1>
<ul class="list">
    <li class="list-item"> <a href="{{ url('/') }}"> Home</a></li> <br>
    <li class="list-item"> <a href="{{ url('about') }}"> about</a></li>
</ul>

<form action="{{ route('contact-us') }}" method="post">
@csrf
<input type="name" name="name" placeholder="write yor name"> <br>
<input type="email" name="email" placeholder="write yor email"> <br>
<button type="submit" value="submit">Submit</button>

</form>
