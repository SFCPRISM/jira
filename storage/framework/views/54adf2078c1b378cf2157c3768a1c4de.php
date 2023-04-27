<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Welcome</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link href="resources/css/style.css" />
        <link
            href="https://getbootstrap.com/docs/5.2/assets/css/docs.css"
            rel="stylesheet"
        />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"
        />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div
                    class="col-2 bicon"
                    style="background-color: black; height: 790px"
                >
                <a style="color:white; position: absolute; left: 8px;">                                    <img
                  src="<?php echo e(asset('assets/user.png')); ?>"
                  alt="user"
              /></a>

                <a style="color: white; position: absolute;left: 65px; ">Rohit k.</a>
              
                <a style="color: white; position: absolute; left: 180px;"><i class="bi bi-bell"></i></a>
                
                <a style="color: white; position: absolute; width: 41px; height: 38px; left: 21px; top: 100px;">Projects</a>
            
                <a style="color: white; position: absolute; width: 41px; height: 38px; left: 141px; top: 100px;"><i class="bi bi-plus-circle"></i></a>
            
                <a style="color: white; position: absolute; width: 41px; height: 38px; left: 21px; top: 140px; font-size: 11px"><i class="bi bi-chevron-compact-down"></i></a>
            
                <a style="color: white; position: absolute; width: 41px; height: 38px; left: 40px; top: 140px; font-size: 11px">Recents</i></a>

                <a style="color: white; position: absolute; left: 10px; top: 175px;"><i class="bi bi-p-circle-fill" style="color:#FE764B;"></i><span>&nbsp&nbspProject management</span></a>
                
                <a style="color: white; position: absolute; left: 10px; top: 215px;"><i class="bi bi-1-circle-fill" style="color:#DF95F9;"></i><span>&nbsp&nbspweb Designing</span></a>
              
                <a style="color: white; position: absolute; left: 9px; top: 265px; font-size: 13px">view all projects</a>

                <a style="color: white; position: absolute; left: 9px; top: 305px; font-size: 25px">Home</a>

                <a style="color:white; position: absolute; left: 18px; top: 350px">                                    <img
                  src="<?php echo e(asset('assets/board.svg')); ?>"
                  alt="user"
              />&nbsp&nbspBoard</a>
              <a style="color:white; position: absolute; left: 18px; top: 390px">                                    <img
                src="<?php echo e(asset('assets/workflow.svg')); ?>"
                alt="user"
              />&nbsp&nbspWorkflow</a>
              <a style="color:white; position: absolute; left: 18px; top: 430px">                                    <img
              src="<?php echo e(asset('assets/timeline.svg')); ?>"
              alt="user"
             />&nbsp&nbspTimeline</a>
             <a style="color:white; position: absolute; left: 18px; top: 470px">                                    <img
             src="<?php echo e(asset('assets/calender.svg')); ?>"
             alt="user"
            />&nbsp&nbspCalender</a>
           <a style="color:white; position: absolute; left: 18px; top: 510px">                                    <img
            src="<?php echo e(asset('assets/listview.svg')); ?>"
            alt="user"
           />&nbsp&nbspList view</a>

              </div>
                <div class="col-10 bodybg">
                    <div class="row">
                        <div class="col-8"></div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-7 hicon">
                                    <div class="input-group mb-3">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Search"
                                            aria-label="Recipient's username"
                                            aria-describedby="button-addon2"
                                        />
                                        <div class="input-group-append">
                                            <button
                                                class="btn btn-outline-secondary"
                                                type="button"
                                                id="button-addon2"
                                            >
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 hicon">
                                    <img
                                        src="<?php echo e(asset('assets/message.png')); ?>"
                                        alt="user"
                                    />
                                    <img
                                        src="<?php echo e(asset('assets/gear.png')); ?>"
                                        alt="user"
                                    />
                                    <img
                                        src="<?php echo e(asset('assets/user.png')); ?>"
                                        alt="user"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3>
                                Project management
                                <span>
                                    <img
                                        src="<?php echo e(asset('assets/himage.png')); ?>"
                                        alt="user"
                                /></span>
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 cardw">
                            <div class="card" style="width: 11rem">
                                <!-- <img src="..." class="card-img-top" alt="..."> -->
                                <div class="card-body">
                                    <p class="card-text">
                                        <i class="bi bi-1-circle-fill" style="color:#FE764B;"></i>
                                        &nbsp&nbspTo do
                                        <i
                                            class="bi bi-three-dots-vertical"
                                            style="
                                                position: absolute;
                                                right: 30px;
                                            "
                                        ></i>
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item"
                                        style="background-color: #fe764b"
                                    >
                                        Cras justo odio
                                    </li>
                                    <li
                                        class="list-group-item"
                                        style="background-color: #fe764b"
                                    >
                                        Dapibus ac facilisis in
                                    </li>
                                    <li
                                        class="list-group-item"
                                        style="background-color: #fe764b"
                                    >
                                        Vestibulum at eros
                                    </li>
                                    <li
                                        class="list-group-item"
                                        style="background-color: white"
                                    >
                                        <a type="button" class="btn btn-light">
                                            <i class="bi bi-plus"> create </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 cardw">
                            <div class="card" style="width: 11rem">
                                <!-- <img src="..." class="card-img-top" alt="..."> -->
                                <div class="card-body">
                                    <p class="card-text">
                                        <i class="bi bi-1-circle-fill" style="color:#DF95F9"></i>
                                        &nbsp&nbspIn Progress
                                        <i
                                            class="bi bi-three-dots-vertical"
                                            style="
                                                position: absolute;
                                                right: 30px;
                                            "
                                        ></i>
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item"
                                        style="background-color: #df95f9"
                                    >
                                        Work 1
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 cardw">
                            <div class="card" style="width: 11rem">
                                <!-- <img src="..." class="card-img-top" alt="..."> -->
                                <div class="card-body">
                                    <p class="card-text">
                                        <i class="bi bi-1-circle-fill" style="color:#234EEC;" ></i>
                                        &nbsp&nbspTesting
                                        <i
                                            class="bi bi-three-dots-vertical"
                                            style="
                                                position: absolute;
                                                right: 30px;
                                            "
                                        ></i>
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item"
                                        style="background-color: #234eec"
                                    >
                                        Work 1
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-2 cardw">
                            <div class="card" style="width: 11rem">
                                <!-- <img src="..." class="card-img-top" alt="..."> -->
                                <div class="card-body">
                                    <p class="card-text">
                                        <i class="bi bi-1-circle-fill" style="color:#9FF148;"></i>
                                        &nbsp&nbspDone
                                        <i
                                            class="bi bi-three-dots-vertical"
                                            style="
                                                position: absolute;
                                                right: 30px;
                                            "
                                        ></i>
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item"
                                        style="background-color: #9ff148"
                                    >
                                        Work 1
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-light">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/mynewapp/resources/views/welcome.blade.php ENDPATH**/ ?>