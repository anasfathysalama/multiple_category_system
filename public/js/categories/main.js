
$(document).on('submit', '#category-form', function (e) {
    e.preventDefault();
    let formData = getFormInputs($("#category-form"));
    createCategory(formData)
});

$(document).on('change', '.category-check', function (e) {
    let categoryId = $(this).data('category_id');
    loadSubCategories(categoryId, $(this));
});

let createCategory = formData => {
    $.ajax({
        url: baseUrl + '/categories',
        method: "POST",
        dataType: "json",
        data: formData,
        success: function (response) {
            if (response.success) {
                alert(response.message);
            }
        },
        complete: function () {
            window.location.reload();
        },
        error: function (error) {
            let response = $.parseJSON(error.responseText);
            $.each(response.errors, function (key, val) {
                $('#' + key + "_error").text(val[0]);
            });
        }
    });
}
let loadSubCategories = (categoryId, categoryEle) => {
    $.ajax({
        url: baseUrl + '/categories/' + categoryId + '/sub-categories',
        method: "GET",
        dataType: "json",
        data: {
            category_id: categoryId
        },
        success: function (response) {
            if (response.success) {
                appendSubCategories(response.data, categoryEle);
            }
        },
        error: function (error) {
            let response = $.parseJSON(error.responseText);
            $.each(response.errors, function (key, val) {
                $('#' + key + "_error").text(val[0]);
            });
        }
    });
}

let appendSubCategories = (data, categoryEle) => {
    $(data).each(function (key, value) {
        categoryEle.closest('.main-div').append(`
             <div class="sub-categories" style="margin-left: 15px;">
                <li> <input type="checkbox" data-category_id="${value.id}" class="category-check" name="category">${value.name}</li>
              </div>
        `);
    });
}
