@csrf
<div class="row">
    <div class="form-group col-md-6 float-md-left">
        <label for="bookIsbn" class="float-left">
            @lang('labels.books.Code ISBN')
        </label>
        <small class="text-danger float-right">
            @errorblock('isbn')
        </small>
        <input type="text"
               name="isbn"
               class="form-control {{ with_error('isbn', 'border border-danger') }}"
               id="bookIsbn"
               placeholder="@lang('labels.books.Code ISBN')"
               onkeypress="$(this).mask('0000000000000');"
               value="{{old('isbn') ?? $book->isbn ?? ''}}">
    </div>

    <div class="form-group col-md-6 float-md-right">
        <label for="bookTitle" class="float-left">
            @lang('labels.books.Title')
        </label>
        <small class="text-danger float-right"> @errorblock('title')</small>
        <input type="text"
               name="title"
               class="form-control {{ with_error('title', 'border border-danger') }}"
               id="bookTitle" placeholder="@lang('labels.books.Title')"
               value="{{old('title') ?? $book->title ?? ''}}">
    </div>

    <div class="form-group col-md-6 float-md-left">
        <label for="bookAuthor" class="float-left">
            @lang('labels.books.Author')
        </label>
        <small class="text-danger float-right"> @errorblock('author')</small>
        <input type="text"
               name="author"
               class="form-control {{ with_error('author', 'border border-danger') }}"
               id="bookAuthor"
               value="{{old('author') ?? $book->author ?? ''}}"
               placeholder="@lang('labels.books.Author')">
    </div>

    <div class="form-group col-md-6 float-md-left">
        <label for="bookGiver" class="float-left">
            @lang('labels.books.Giver')
        </label>
        <small class="text-danger float-right"> @errorblock('giver') </small>
        <input type="text"
               name="giver"
               class="form-control {{ with_error('giver', 'border border-danger') }}"
               id="bookGiver"
               value="{{old('giver') ?? $book->giver ?? ''}}"
               placeholder="@lang('labels.books.Giver')">
    </div>

    <div class="form-group col-md-6 float-md-right">
        <label for="BookEntryDate" class="float-left">
            @lang('labels.books.Entry Date')
        </label>
        <small class="text-danger float-right">@errorblock('entryDate')</small>
        <input type="text"
               name="entryDate"
               class="form-control {{ with_error('entryDate', 'border border-danger') }}"
               id="BookEntryDate"
               value="{{isset($book->entryDate) ? format_date($book->entryDate, 'd/m/Y') : old('entryDate')}}"
               onkeypress="$(this).mask('00/00/0000');"
               placeholder="@lang('labels.books.Entry Date')">
    </div>
</div>