$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.main_slide_destroy').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'admin/main_slide_destroy',
            type: 'post',
            data: {id: id},
            success: function (data) {
                 location.reload();
            }

        })

    });

    $('.main_why_destroy').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'admin/main_why_destroy',
            type: 'post',
            data: {id: id},
            success: function (data) {
                location.reload();
            }

        })

    });

    $('.main_team_destroy').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'admin/main_team_destroy',
            type: 'post',
            data: {id: id},
            success: function (data) {
                location.reload();
            }

        })

    });

    $('.main_comment_destroy').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'admin/main_comment_destroy',
            type: 'post',
            data: {id: id},
            success: function (data) {
                 location.reload();
            }

        })

    });

    $('.about_about_destroy').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'about_about_destroy',
            type: 'post',
            data: {id: id},
            success: function (data) {
                location.reload();
            }

        })

    });

    $('.about_daily_destroy').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'about_daily_destroy',
            type: 'post',
            data: {id: id},
            success: function (data) {
                location.reload();
            }

        })

    });
    $('.about_student_destroy').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'about_student_destroy',
            type: 'post',
            data: {id: id},
            success: function (data) {
                location.reload();
            }

        })

    });

    $('.courses_daily_destroy').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'courses_daily_destroy',
            type: 'post',
            data: {id: id},
            success: function (data) {
                location.reload();
            }

        })

    });

    $('.companies_destroy').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'admin/companies_destroy',
            type: 'post',
            data: {id: id},
            success: function (data) {
                location.reload();
            }

        })

    });

    $('.programmer_section_destroy').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'programmer_section_destroy',
            type: 'post',
            data: {id: id},
            success: function (data) {
                location.reload();
            }

        })

    });
});