<table class="table table-bordered table-hover table-sm alunos">
  <thead>
    <tr>
      <th>Ano</th>
      <th>Curso/habilitação</th>
      <th>Tipo ingresso</th>
      <th>Identificação</th>
      <th>Sexo</th>
      <th>Nascimento</th>
      <th>Estado</th>
      <th>Data do encerramento</th>
      <th>Tipo encerramento</th>
      <th>Benefício</th>
      <th>Disc. Reprovadas</th>
      <th>Disc. Aprovadas</th>
      <th>Media pond (suja)</th>
      <th>Media pond (limpa)</th>
      @foreach ($disciplinasDeInteresse as $di)
        <th>{{ $di }}</th>
      @endforeach
    </tr>
  </thead>
  <tbody>
    @foreach ($alunos as $aluno)
      <tr>
        <td>{{ $aluno['ano'] }}</td>
        <td>{{ $aluno['curso'] }}</td>
        <td>{{ $aluno['tiping'] }}</td>
        <td>{{ $aluno['codpes'] }}</td>
        <td>{{ $aluno['sexpes'] }}</td>
        <td>{{ $aluno['anonas'] }}</td>
        <td>{{ $aluno['status'] }}</td>
        <td>{{ $aluno['data4'] }}</td>
        <td>{{ $aluno['tipenchab'] }}</td>
        <td>{{ $aluno['beneficio'] }}</td>
        <td>{{ $aluno['totalDiscRepr'] }}</td>
        <td>{{ $aluno['totalDiscAprov'] }}</td>
        <td>{{ $aluno['mediaPonderadaSuja'] }}</td>
        <td>{{ $aluno['mediaPonderadaLimpa'] }}</td>
        @foreach ($disciplinasDeInteresse as $di)
          <td>{{ $aluno['di_' . $di] }}</td>
        @endforeach
      </tr>
    @endforeach
  </tbody>
</table>

@section('javascripts_bottom')
  @parent
  <script>
    $(function() {
      oTable = $('.alunos').DataTable({
        dom: 'fBi',
        "paging": false,
        "responsive": false,
        "order": [
          [1, "asc"]
        ],
        language: {
          url: 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
        },
        "buttons": [
          'excelHtml5', 'csvHtml5'
        ]
      });

    });
  </script>
@endsection
