module.exports = function (grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    jshint: {
      files: ['Gruntfile.js', 'assets/js/*.js'],
      options: {
        force: true,
        globals: {
          jQuery: true
        }
      }
    },

    copy: {
      bourbon: {
        expand: true,
        cwd: 'node_modules/bourbon/app/assets/stylesheets/',
        src: '**',
        dest: 'assets/sass/bourbon',
        flatten: false,
        filter: 'isFile'
      },
      neat: {
        expand: true,
        cwd: 'node_modules/bourbon-neat/app/assets/stylesheets/',
        src: '**',
        dest: 'assets/sass/neat',
        flatten: false,
        filter: 'isFile'
      }
    },

    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded'
        },
        files: {                         // Dictionary of files
          'style.css': 'assets/sass/style.scss'       // 'destination': 'source'
        }
      }
    },

    postcss: {
      options: {
        map: true, // inline sourcemaps

        processors: [
          require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
        ]
      },
      dist: {
        src: 'style.css'
      }
    },

    // concat: {
    //   options: {
    //   },
    //   javascript: {
    //     src: [ 'bower_components/bootstrap/dist/js/bootstrap.min.js', 'bower_components/jquery-backstretch/jquery.backstretch.min.js', 'js/custom.js' ],
    //     dest: 'js/compiled.js'
    //   },
    //   css: {
    //     src: ['css/theme-header.css', 'bower_components/bootstrap/dist/css/bootstrap.min.css', 'css/main-style.css' ],
    //     dest: 'style.css'
    //   }
    // },

    //uglify: {
    //  javascript: {
    //    files: {
    //      'meg-n-boots.min.js': ['meg-n-boots.js']
    //    }
    //  }
    //},

    watch: {
      files: ['assets/css/*.css', 'assets/js/*.js', 'assets/sass/**/*.scss'],
      tasks: ['jshint', 'sass']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');

  grunt.registerTask('default', ['jshint', 'sass', 'watch']);
  grunt.registerTask('post', 'postcss');
  grunt.registerTask('update', 'copy', 'sass');


};
