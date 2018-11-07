
    <div>
        <h1>Title: {{$post->title}}</h1>
        <p>Body: {{$post->body}}</p>
    </div>

    <hr>
    </div>
    @foreach($post->reactions as $reaction)
        <p>Subject: {{$reaction->title}}</p>
        <p>Description: {{$reaction->body}}</p>
        <hr>
    @endforeach