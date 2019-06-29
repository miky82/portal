
<div class="container mx-auto">
    @include('layouts._ads._footer')
    @include('layouts._sponsors')

    <footer id="footer">
        Copyright &copy; 2013 - {{ date('Y') }} Laravel.io
        <span>&bull;</span>
        <a href="{{ route('terms') }}">Terms</a>
        <span>&bull;</span>
        <a href="{{ route('privacy') }}">Privacy</a>
        <span>&bull;</span>
        <a href="https://github.com/laravelio"><i class="fa fa-github"></i></a>
        <a href="https://twitter.com/laravelio"><i class="fa fa-twitter"></i></a>
        <a href="https://medium.com/laravelio"><i class="fa fa-medium"></i></a>
    </footer>
</div>
