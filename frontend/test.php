<select onchange="navigateToPage(this)">
    <option value="" selected disabled>Select a Page</option>
    <option value="page1.html">Page 1</option>
    <option value="page2.html">Page 2</option>
    <option value="page3.html">Page 3</option>
</select>

<script>
    function navigateToPage(selectElement) {
        var selectedPage = selectElement.value;
        if (selectedPage) {
            window.location.href = selectedPage;
        }
    }
</script>
