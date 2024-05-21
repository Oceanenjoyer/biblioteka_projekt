<?php 
require_once 'adminpanel_model.php';
require_once 'adminpanel_contr.php';

// ==================== USERS =====================

function showAllUsersTable($result)
{
    echo "<table>
            <tr>
                <th>ID użytkownika</th>
                <th>Nazwa użytkownika</th>
                <th>Email użytkownika</th>
                <th>Admin</th>
                <th>Operacje</th>
            </tr>
        ";

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['User_ID'] . "</td>";
        echo '<td>' . $row['User_name'] . "</td>";
        echo '<td>' . $row['User_email'] . "</td>";
        echo '<td>' . $row['User_Admin'] . "</td>";
        echo "<td>
                    <form method='POST'>
                        <input type=hidden name=iduser value=" . $row["User_ID"] . " >
                        <input type=submit  onclick='return confirm(\"Czy na pewno chcesz usunąć?\");' value=Usuń name=deleteuser >
                    </form>
                    </td>";
        echo '</tr>';
    }
    echo "</table>";
}

// ==================== BOOKS =====================


function showAllBooksTable($result) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Tytuł</th>
                <th>Gatunek</th>
                <th>Autor</th>
                <th>Opis</th>
                <th>Data wydania</th>
                <th>Liczba stron</th>
                <th>Ścieżka</th>
                <th>Operacje</th>
            </tr>
        </table>";

    while ($row = $result->fetch_assoc()) {
        echo '<table>';
        echo '<tr>';
        echo '<td>' . $row['Book_ID'] . "</td>";
        echo '<td>' . $row['Book_title'] . "</td>";
        echo '<td>' . $row['Book_genre'] . "</td>";
        echo '<td>' . $row['Book_author'] . "</td>";
        echo '<td>' . '<input id="show-button-' . $row['Book_ID'] . '" type="button" onclick="showDescription(' . $row['Book_ID'] . ')" value="Pokaż" id="show">' . "</td>";
        echo '<td>' . $row['Book_release'] . "</td>";
        echo '<td>' . $row['Book_pages'] . "</td>";
        echo '<td>' . $row['Book_imgpath'] . "</td>";
        echo "<td>
                    <form method='POST'>
                        <input type=hidden name=idbook value=" . $row["Book_ID"] . " >
                        <input type=submit onclick='return confirm(\"Czy na pewno chcesz usunąć?\");' value=Usuń name=deletebook >
                        <input type=hidden name=titlebook value=" . urlencode($row["Book_title"]) . " >
                        <input type=hidden name=authorbook value=" . urlencode($row["Book_author"]) . " >
                        <input type=submit value=Idź name=gotobook >
                    </form>
                    </td>";
        echo '</tr>';
        echo '</table>';
        echo '<div class="book__description" id="description-' . $row['Book_ID'] . '" style="display:none">' . $row['Book_description'] . '</div>';
    }

    // substr($row['Book_description'], 0, 40) . '...  ' .

}

function showBookTools() {

    echo '<div class="book__tools">
            <h1>Dodaj ksiazke</h1>
            <form action="uploadbook.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="Book_title" placeholder="Tytuł ksiazki...">
                <input type="text" name="Book_genre" placeholder="Gatunek ksiazki...">
                <input type="text" name="Book_author" placeholder="Autor ksiazki...">
                <input type="text" name="Book_description" placeholder="Opis ksiazki...">
                <input type="date" name="Book_release" placeholder="Data wydania ksiazki (YYYY-MM-DD)...)">
                <input type="text" name="Book_pages" placeholder="Liczba stron ksiazki...">
                <input type="file" name="Book_img" placeholder="Zdjecie ksiazki...">
                <input type="submit" name="Book_submit" value="Dodaj ksiazke">
            </form>
        </div>';
}