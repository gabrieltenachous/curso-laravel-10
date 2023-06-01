<h1>Nova Duvida</h1>
<x-alert/>
<form action="{{ route('supports.store') }}" method="POST">
   @method('POST')
   @include('admin.supports.partials.form')
</form>
