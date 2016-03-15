module.exports = function(grunt) {

	grunt.initConfig({

		// image minifier
	  imagemin: {
	    png: {
        options: {
          optimizationLevel: 7,
        },
        files: [
          {
            expand: true,                         // Enable dynamic expansion
            cwd: 'public/css/imgs/no-compress',  // path images source
            src: ['*.png'],             // patterns to match
            dest: 'public/css/imgs'               // path images destination
          }
        ]
      },
      jpg: {
        options: {
          progressive: true
        },
        files: [
            {
            expand: true,                         // Enable dynamic expansion
            cwd: 'public/css/imgs/no-compress',  // path images source
            src: ['*.jpg'],             // patterns to match
            dest: 'public/css/imgs'               // path images destination
          }
        ]
      }
    },

  	// css minifier
    cssmin: {
  	  target: {
  	    files: [{
          'public/css/front.theme.min.css': ['public/css/front.theme.css'],
          'public/css/admin.theme.min.css': ['public/css/admin.theme.css', 'public/css/jquery.modal.css']
  	    }],

  	  }
  	},

    // watch
  	watch: {
  		scripts: {
  			files: ['public/css/front.theme.css', 'public/css/dev/front.theme.scss', 'public/css/dev/admin.theme.scss', 'public/js/main.js'],
  			tasks: ['sass', 'cssmin', 'uglify'],
  			options: {
  				spawn: false,
      	},
    	}
  	},

    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded'
        },
        files: {                         // Dictionary of files
          'public/css/front.theme.css': 'public/css/dev/front.theme.scss',
          'public/css/admin.theme.css': 'public/css/dev/admin.theme.scss'
        }
      }
    },

  	// Minimifie les fichiers javascripts
    uglify: {
      my_target: {
        files: {
          'public/js/admin.functions.min.js': ['public/js/jquery.modal.js', 'public/js/admin.functions.js'],
          'public/js/front.main.min.js': ['public/js/front.main.js']
        }
      }
    }
  });

	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');

	grunt.registerTask('default', ['cssmin']);
  grunt.registerTask('build', ['sass', 'cssmin', 'uglify']);

}
