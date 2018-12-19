{include file='common/header.tpl'}

<article>
    <table>
        <tr>
            <th>Pet name</th>
            <th>Status</th> 
        </tr>
        <{foreach $status as $stat}
          <tr>
            <td>{$statu.name}</td>
            <td>{$statu.status}</td>
          </tr>
        {/foreach}
    </table>
  </article>

{include file='common/footer.tpl'}