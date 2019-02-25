<li class="{{ Request::is('tags*') ? 'active' : '' }}">
    <a href="{!! route('admin.tags.index') !!}"><i class="fa fa-edit"></i><span>Tags</span></a>
</li>

<li class="{{ Request::is('series*') ? 'active' : '' }}">
    <a href="{!! route('admin.series.index') !!}"><i class="fa fa-edit"></i><span>Series</span></a>
</li>

<li class="{{ Request::is('ratings*') ? 'active' : '' }}">
    <a href="{!! route('admin.ratings.index') !!}"><i class="fa fa-edit"></i><span>Ratings</span></a>
</li>

<li class="{{ Request::is('publishers*') ? 'active' : '' }}">
    <a href="{!! route('admin.publishers.index') !!}"><i class="fa fa-edit"></i><span>Publishers</span></a>
</li>

<li class="{{ Request::is('preferences*') ? 'active' : '' }}">
    <a href="{!! route('admin.preferences.index') !!}"><i class="fa fa-edit"></i><span>Preferences</span></a>
</li>

<li class="{{ Request::is('languages*') ? 'active' : '' }}">
    <a href="{!! route('admin.languages.index') !!}"><i class="fa fa-edit"></i><span>Languages</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('admin.users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('identifiers*') ? 'active' : '' }}">
    <a href="{!! route('admin.identifiers.index') !!}"><i class="fa fa-edit"></i><span>Identifiers</span></a>
</li>

<li class="{{ Request::is('feeds*') ? 'active' : '' }}">
    <a href="{!! route('admin.feeds.index') !!}"><i class="fa fa-edit"></i><span>Feeds</span></a>
</li>

<li class="{{ Request::is('file*') ? 'active' : '' }}">
    <a href="{!! route('admin.file.index') !!}"><i class="fa fa-edit"></i><span>File</span></a>
</li>

<li class="{{ Request::is('feeds*') ? 'active' : '' }}">
    <a href="{!! route('admin.feeds.index') !!}"><i class="fa fa-edit"></i><span>Feeds</span></a>
</li>


<li class="{{ Request::is('conversionOptions*') ? 'active' : '' }}">
    <a href="{!! route('admin.conversionOptions.index') !!}"><i class="fa fa-edit"></i><span>Conversion Options</span></a>
</li>

<li class="{{ Request::is('books*') ? 'active' : '' }}">
    <a href="{!! route('admin.books.index') !!}"><i class="fa fa-edit"></i><span>Books</span></a>
</li>

<li class="{{ Request::is('authors*') ? 'active' : '' }}">
    <a href="{!! route('admin.authors.index') !!}"><i class="fa fa-edit"></i><span>Authors</span></a>
</li>

<li class="{{ Request::is('comments*') ? 'active' : '' }}">
    <a href="{!! route('admin.comments.index') !!}"><i class="fa fa-edit"></i><span>Comments</span></a>
</li>