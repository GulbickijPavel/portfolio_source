module.exports = function(grunt) {

    grunt.initConfig({
        cssmin: {
            main: {
                files: {
                    'build/styles.min.css': 'css/styles.css',
                    'build/bootstrap.min.css': 'css/bootstrap.css',
                    'build/jquery.bxslider.min.css': 'slider/jquery.bxslider.css',
                }
            }
        },
        concat: {
            options: {
                separator: ';',
            },
            js: {
                src: ['js/vendor/*.js', 'slider/jquery.bxslider.min.js'],
                dest: 'build/combined.min.js'
            }
        },
        uglify: {
            my_target: {
              files: {
                'build/script.min.js': ['js/script.js']
              }
            }
          }
    });
    grunt.loadNpmTasks( 'grunt-contrib-concat' );
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.registerTask('dev', ['cssmin', 'concat', 'uglify']);

};