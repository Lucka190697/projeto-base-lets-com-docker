<th sortable @click="orderBy('isbn', $event)">ISBN</th>
<th sortable @click="orderBy('title', $event)">@lang('headings.books.Title')</th>
<th sortable @click="orderBy('author', $event)">@lang('headings.books.Author')</th>
<th sortable @click="orderBy('giver', $event)">@lang('headings.books.Giver')</th>
<th sortable @click="orderBy('owner', $event)">@lang('headings.books.Owner')</th>
<th sortable @click="orderBy('entryDate', $event)">@lang('headings.books.Entry Date')</th>
<th></th>
