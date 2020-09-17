<th sortable @click="orderBy('loans_date', $event)">Data do Empréstimo</th>
<th sortable @click="orderBy('return_date', $event)">Data da Devolução</th>
<th sortable @click="orderBy('is_loan', $event)">Status</th>
<th sortable @click="orderBy('user_id', $event)">Usuário</th>
<th sortable @click="orderBy('book_id', $event)">Livro</th>
<th>Actions</th>