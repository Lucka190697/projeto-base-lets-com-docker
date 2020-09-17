@csrf
<div class="row">
    <div class="form-group col-md-6 float-md-left">
        <label for="bookIsbn" class="float-left">
            ISBN
        </label>
        <small class="text-danger float-right">
            @errorblock('isbn')
        </small>
        <input type="text"
               name="isbn"
               class="form-control {{ with_error('isbn', 'border border-danger') }}"
               id="bookIsbn"
               placeholder="Código ISBN"
               onkeypress="$(this).mask('0000000000000');"
               value="{{old('isbn') ?? $book->isbn ?? ''}}">
    </div>

    <div class="form-group col-md-6 float-md-right">
        <label for="bookTitle" class="float-left">
            @lang('headings.books.Title')
        </label>
        <small class="text-danger float-right"> @errorblock('title')</small>
        <input type="text"
               name="title"
               class="form-control {{ with_error('title', 'border border-danger') }}"
               id="bookTitle" placeholder="Título do Livro"
               value="{{old('title') ?? $book->title ?? ''}}">
    </div>

    <div class="form-group col-md-6 float-md-left">
        <label for="bookAuthor" class="float-left">
            @lang('headings.books.Author')
        </label>
        <small class="text-danger float-right"> @errorblock('author')</small>
        <input type="text"
               name="author"
               class="form-control {{ with_error('author', 'border border-danger') }}"
               id="bookAuthor"
               value="{{old('author') ?? $book->author ?? ''}}"
               placeholder="Autor do Livro">
    </div>

    <div class="form-group col-md-6 float-md-left">
        <label for="bookGiver" class="float-left">
            @lang('headings.books.Giver')
        </label>
        <small class="text-danger float-right"> @errorblock('giver') </small>
        <input type="text"
               name="giver"
               class="form-control {{ with_error('giver', 'border border-danger') }}"
               id="bookGiver"
               value="{{old('giver') ?? $book->giver ?? ''}}"
               placeholder="Doador do Livro">
    </div>

    <div class="form-group col-md-6 float-md-right">
        <label for="BookEntryDate" class="float-left">
            @lang('headings.books.Entry Date')
        </label>
        <small class="text-danger float-right">@errorblock('entryDate')</small>
        <input type="text"
               name="entryDate"
               class="form-control {{ with_error('entryDate', 'border border-danger') }}"
               id="BookEntryDate"
               value="{{old('entryDate') ?? $book->entryDate ?? ''}}"
               onkeypress="$(this).mask('00/00/0000');"
               placeholder="Quando o livro chegou">
    </div>
</div>