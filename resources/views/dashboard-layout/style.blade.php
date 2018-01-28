<style>
        /*
     * Base structure
     */
    
    /* Move down content because we have a fixed navbar that is 3.5rem tall */
    body {
        padding-top: 3.5rem;
      }
      
      /*
       * Typography
       */
      
      h1 {
        padding-bottom: 9px;
        margin-bottom: 20px;
        border-bottom: 1px solid #eee;
      }
      
      /*
       * Sidebar
       */
      
      .sidebar {
        position: fixed;
        top: 51px;
        bottom: 0;
        left: 0;
        z-index: 1000;
        padding: 20px 0;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        border-right: 1px solid #eee;
      }
      
      .sidebar .nav {
        margin-bottom: 20px;
      }
      
      .sidebar .nav-item {
        width: 100%;
      }
      
      .sidebar .nav-item + .nav-item {
        margin-left: 0;
      }
      
      .sidebar .nav-link {
        border-radius: 0;
      }
      
      /*
       * Dashboard
       */
      
      /* Placeholders */
      .placeholders {
        padding-bottom: 3rem;
      }
      
      .placeholder img {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
      }
    </style>