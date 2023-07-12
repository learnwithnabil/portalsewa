<x-app-layout title="Avatar Element" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 lg:text-2xl"
          >
            Avatar
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus"
                href="#"
                >Elements</a
              >
              <svg
                x-ignore
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </li>
            <li>Avatar</li>
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Rounded Avatar -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Rounded Avatar
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                The Avatar component creates a scalable, colorable element that
                can have text, icon or image within its shape. Check out code
                for detail of usage.
              </p>
              <div class="inline-space mt-5">
                <div class="avatar h-8 w-8">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-10 w-10">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-12 w-12">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-16 w-16">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-20 w-20">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-24 w-24">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-8 w-8&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-10 w-10&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-16 w-16&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-20 w-20&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-24 w-24&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
              </pre>
            </div>
          </div>

          <!-- Square Avatar -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Square Avatar
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Avatars can have a square shape. To do this, you should use the
                <code class="inline-code">rounded-lg</code>
                utility. Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5">
                <div class="avatar h-8 w-8">
                  <img
                    class="rounded-lg"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-10 w-10">
                  <img
                    class="rounded-lg"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-12 w-12">
                  <img
                    class="rounded-lg"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-16 w-16">
                  <img
                    class="rounded-lg"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-20 w-20">
                  <img
                    class="rounded-lg"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-24 w-24">
                  <img
                    class="rounded-lg"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-8 w-8&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-lg&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-10 w-10&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-lg&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-lg&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-16 w-16&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-lg&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-20 w-20&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-lg&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-24 w-24&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-lg&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>

          <!-- Squircle Avatar -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Squircle Avatar
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Avatars can have a squircle shape. To do this, you should use
                the
                <code class="inline-code">mask is-squircle</code>
                classes. Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5">
                <div class="avatar h-8 w-8">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-10 w-10">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-12 w-12">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-16 w-16">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-20 w-20">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-24 w-24">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-8 w-8&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-10 w-10&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-16 w-16&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-20 w-20&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-24 w-24&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;  &lt;/div&gt;  
                </code>
              </pre>
            </div>
          </div>

          <!-- Initial Avatar -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Initial Avatar
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                In the absence of a image, you can use the initial. Initials can
                be used in various variants. Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5">
                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-primary text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-secondary text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-info text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-success text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-warning text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-error text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-primary text-base uppercase text-white    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-secondary text-base uppercase text-white&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div class=&quot;is-initial rounded-full bg-info text-base uppercase text-white&quot;&gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-success text-base uppercase text-white&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-warning text-base uppercase text-white&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-error text-base uppercase text-white&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;
                </code>
              </pre>
            </div>
          </div>

          <!-- Square Initial Avatar -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Square Initial Avatar
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Initial avatars can have a square shape. To do this, you should
                use the
                <code class="inline-code">rounded-lg</code>
                utility. Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5">
                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-primary text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-secondary text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-info text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-success text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-warning text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-error text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-lg bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-lg bg-primary text-base uppercase text-white    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-lg bg-secondary text-base uppercase text-white&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div class=&quot;is-initial rounded-lg bg-info text-base uppercase text-white&quot;&gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-lg bg-success text-base uppercase text-white&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-lg bg-warning text-base uppercase text-white&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-lg bg-error text-base uppercase text-white&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;  
                </code>
              </pre>
            </div>
          </div>

          <!-- Squircle Initial Avatar -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Squircle Initial Avatar
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Initial avatars can have a squircle shape. To do this, you
                should use the
                <code class="inline-code">mask is-squircle</code>
                utility. Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5">
                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial mask is-squircle bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial mask is-squircle bg-primary text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial mask is-squircle bg-secondary text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial mask is-squircle bg-info text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial mask is-squircle bg-success text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial mask is-squircle bg-warning text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial mask is-squircle bg-error text-base uppercase text-white"
                  >
                    jd
                  </div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial mask is-squircle bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial mask is-squircle bg-primary text-base uppercase text-white    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial mask is-squircle bg-secondary text-base uppercase text-white&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div class=&quot;is-initial mask is-squircle bg-info text-base uppercase text-white&quot;&gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial mask is-squircle bg-success text-base uppercase text-white&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial mask is-squircle bg-warning text-base uppercase text-white&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial mask is-squircle bg-error text-base uppercase text-white&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;  &#13;&#10;                </code>
              </pre>
            </div>
          </div>

          <!-- Soft Initial Avatar -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Soft Initial Avatar
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Initial avatars can have a soft colors. To do this, you should
                use some opacity. Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5">
                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-primary/10 text-base uppercase text-primary"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-secondary/10 text-base uppercase text-secondary"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-info/10 text-base uppercase text-info"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-success/10 text-base uppercase text-success"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-warning/10 text-base uppercase text-warning"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-error/10 text-base uppercase text-error"
                  >
                    jd
                  </div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-primary/10 text-base uppercase text-primary    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-secondary/10 text-base uppercase text-secondary    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-info/10 text-base uppercase text-info&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-success/10 text-base uppercase text-success&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-warning/10 text-base uppercase text-warning&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-error/10 text-base uppercase text-error&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
              </pre>
            </div>
          </div>

          <!-- Bordered Initial Avatar -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Bordered Initial Avatar
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Initial avatars can have a border. Check out code for detail of
                usage.
              </p>
              <div class="inline-space mt-5">
                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full border border-primary/30 bg-primary/10 text-base uppercase text-primary"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full border border-secondary/30 bg-secondary/10 text-base uppercase text-secondary"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full border border-info/30 bg-info/10 text-base uppercase text-info"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full border border-success/30 bg-success/10 text-base uppercase text-success"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full border border-warning/30 bg-warning/10 text-base uppercase text-warning"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full border border-error/30 bg-error/10 text-base uppercase text-error"
                  >
                    jd
                  </div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full border border-primary/30 bg-primary/10 text-base uppercase text-primary    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full border border-secondary/30 bg-secondary/10 text-base uppercase text-secondary    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full border border-info/30 bg-info/10 text-base uppercase text-info&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full border border-success/30 bg-success/10 text-base uppercase text-success&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full border border-warning/30 bg-warning/10 text-base uppercase text-warning&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full border border-error/30 bg-error/10 text-base uppercase text-error&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>

          <!--Square Soft Initial Avatar -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Square Soft Initial
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Initial avatars can have a soft colors and square shape. To do
                this, you should use some opacity and border-radius utility.
                Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5">
                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-primary/10 text-base uppercase text-primary"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-secondary/10 text-base uppercase text-secondary"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-info/10 text-base uppercase text-info"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-success/10 text-base uppercase text-success"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-warning/10 text-base uppercase text-warning"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-lg bg-error/10 text-base uppercase text-error"
                  >
                    jd
                  </div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-lg bg-primary/10 text-base uppercase text-primary    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-lg bg-secondary/10 text-base uppercase text-secondary    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div class=&quot;is-initial rounded-lg bg-info/10 text-base uppercase text-info&quot;&gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-lg bg-success/10 text-base uppercase text-success&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-lg bg-warning/10 text-base uppercase text-warning&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-lg bg-error/10 text-base uppercase text-error&quot;&#13;&#10;    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;    
                </code>
              </pre>
            </div>
          </div>

          <!-- Avatar with dots -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Avatar With Dots
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Avatars can be a dot attached to it. It can be used to indicate
                the user status. Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5">
                <div class="avatar h-8 w-8">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 h-2.5 w-2.5 rounded-full border border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-10 w-10">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-12 w-12">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-16 w-16">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 m-0.5 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-20 w-20">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-24 w-24">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 m-1.5 h-4 w-4 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-8 w-8&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-2.5 w-2.5 rounded-full border border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-10 w-10&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-16 w-16&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 m-0.5 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-20 w-20&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-24 w-24&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 m-1.5 h-4 w-4 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>

          <!-- Squircle Avatar with dots -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Squircle Avatar Dots
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Avatars can be a dot attached to it. It can be used to indicate
                the user status. Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5">
                <div class="avatar h-8 w-8">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 -m-px h-2.5 w-2.5 rounded-full border border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-10 w-10">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 -m-0.5 h-3 w-3 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-12 w-12">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 -m-0.5 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-16 w-16">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 -m-px h-3.5 w-3.5 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-20 w-20">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 h-4 w-4 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-24 w-24">
                  <img
                    class="mask is-squircle"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 h-4 w-4 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-8 w-8&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 -m-px h-2.5 w-2.5 rounded-full border border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-10 w-10&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 -m-0.5 h-3 w-3 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 -m-0.5 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-16 w-16&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 -m-px h-3.5 w-3.5 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-20 w-20&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-4 w-4 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-24 w-24&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;mask is-squircle&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-4 w-4 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;  
                </code>
              </pre>
            </div>
          </div>

          <!-- Initial Avatar with dots -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Initial With Dots
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Initial avatars can be a dot attached to it, too. It can be used
                to indicate the user status. Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5 flex flex-wrap items-end">
                <div class="avatar h-8 w-8">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-xs+ uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 h-2.5 w-2.5 rounded-full border border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-10 w-10">
                  <div
                    class="is-initial rounded-full bg-slate-200 uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-16 w-16">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-lg uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 m-0.5 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-20 w-20">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-xl uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-24 w-24">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-2xl uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 m-1.5 h-4 w-4 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-8 w-8&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-xs+ uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-2.5 w-2.5 rounded-full border border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-10 w-10&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3 w-3 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-16 w-16&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-lg uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 m-0.5 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-20 w-20&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-xl uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 m-1 h-4 w-4 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-24 w-24&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-2xl uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 m-1.5 h-4 w-4 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;    
                </code>
              </pre>
            </div>
          </div>

          <!-- Avatar Dot Colors -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Avatar Dot Colors
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Avatar dots can be used in various colors. It can be used to
                indicate the user status. Check out code for detail of usage.
              </p>
              <div class="inline-space mt-5">
                <div class="avatar h-12 w-12">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-slate-300"
                  ></div>
                </div>

                <div class="avatar h-12 w-12">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary"
                  ></div>
                </div>

                <div class="avatar h-12 w-12">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-secondary"
                  ></div>
                </div>

                <div class="avatar h-12 w-12">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-info"
                  ></div>
                </div>

                <div class="avatar h-12 w-12">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-success"
                  ></div>
                </div>

                <div class="avatar h-12 w-12">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-warning"
                  ></div>
                </div>

                <div class="avatar h-12 w-12">
                  <img
                    class="rounded-full"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-error"
                  ></div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-slate-300    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-secondary    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-info    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-success    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-warning    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;img&#13;&#10;      class=&quot;rounded-full&quot;&#13;&#10;      src=&quot;images/200x200.png&quot;&#13;&#10;      alt=&quot;avatar&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-error    &gt;&lt;/div&gt;&#13;&#10;  &lt;/div&gt;                </code>
              </pre>
            </div>
          </div>

          <!-- Avatar dot ping -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Avatar Dot Ping
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Avatar dots can have the ping animation. This can be used to
                indicate an important message. Check out code for detail of
                usage.
              </p>
              <div class="inline-space mt-5 flex flex-wrap items-end">
                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary"
                  >
                    <span
                      class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80"
                    ></span>
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-secondary"
                  >
                    <span
                      class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary opacity-80"
                    ></span>
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-info"
                  >
                    <span
                      class="absolute inline-flex h-full w-full animate-ping rounded-full bg-info opacity-80"
                    ></span>
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-success"
                  >
                    <span
                      class="absolute inline-flex h-full w-full animate-ping rounded-full bg-success opacity-80"
                    ></span>
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-warning"
                  >
                    <span
                      class="absolute inline-flex h-full w-full animate-ping rounded-full bg-warning opacity-80"
                    ></span>
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-error"
                  >
                    <span
                      class="absolute inline-flex h-full w-full animate-ping rounded-full bg-error opacity-80"
                    ></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary    &gt;&#13;&#10;      &lt;span&#13;&#10;        class=&quot;absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80      &gt;&lt;/span&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-secondary    &gt;&#13;&#10;      &lt;span&#13;&#10;        class=&quot;absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary opacity-80      &gt;&lt;/span&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-info    &gt;&#13;&#10;      &lt;span&#13;&#10;        class=&quot;absolute inline-flex h-full w-full animate-ping rounded-full bg-info opacity-80&quot;&#13;&#10;      &gt;&lt;/span&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-success    &gt;&#13;&#10;      &lt;span&#13;&#10;        class=&quot;absolute inline-flex h-full w-full animate-ping rounded-full bg-success opacity-80&quot;&#13;&#10;      &gt;&lt;/span&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-warning    &gt;&#13;&#10;      &lt;span&#13;&#10;        class=&quot;absolute inline-flex h-full w-full animate-ping rounded-full bg-warning opacity-80&quot;&#13;&#10;      &gt;&lt;/span&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-error    &gt;&#13;&#10;      &lt;span&#13;&#10;        class=&quot;absolute inline-flex h-full w-full animate-ping rounded-full bg-error opacity-80&quot;&#13;&#10;      &gt;&lt;/span&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>

          <!-- Avatar Dot Position -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Avatar Dot Position
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Avatar dot position can be up, down, left and right. Check out
                code for detail of usage.
              </p>
              <div class="inline-space mt-5 flex flex-wrap items-end">
                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary"
                  >
                    <span
                      class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80"
                    ></span>
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute left-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary"
                  >
                    <span
                      class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80"
                    ></span>
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary"
                  >
                    <span
                      class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80"
                    ></span>
                  </div>
                </div>

                <div class="avatar h-12 w-12">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600"
                  >
                    jd
                  </div>
                  <div
                    class="absolute bottom-0 left-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary"
                  >
                    <span
                      class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80"
                    ></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary    &gt;&#13;&#10;      &lt;span&#13;&#10;        class=&quot;absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80      &gt;&lt;/span&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute left-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary    &gt;&#13;&#10;      &lt;span&#13;&#10;        class=&quot;absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80      &gt;&lt;/span&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary    &gt;&#13;&#10;      &lt;span&#13;&#10;        class=&quot;absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80      &gt;&lt;/span&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div class=&quot;avatar h-12 w-12&quot;&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;is-initial rounded-full bg-slate-200 text-base uppercase text-slate-600    &gt;&#13;&#10;      jd&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;absolute bottom-0 left-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary    &gt;&#13;&#10;      &lt;span&#13;&#10;        class=&quot;absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-80      &gt;&lt;/span&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;                </code>
              </pre>
            </div>
          </div>

          <!-- Avatar group -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Avatar Group
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                The Avatar group renders its children as a stack. Check out code
                for detail of usage.
              </p>
              <div class="mt-5 flex flex-wrap -space-x-2">
                <div class="avatar h-8 w-8 hover:z-10">
                  <img
                    class="rounded-full ring ring-white"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-8 w-8 hover:z-10">
                  <div
                    class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-8 w-8 hover:z-10">
                  <img
                    class="rounded-full ring ring-white"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-8 w-8 hover:z-10">
                  <img
                    class="rounded-full ring ring-white"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-8 w-8 hover:z-10">
                  <img
                    class="rounded-full ring ring-white"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-8 w-8 hover:z-10">
                  <img
                    class="rounded-full ring ring-white"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;flex flex-wrap -space-x-2&quot;&gt;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8 hover:z-10&quot;&gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-full ring ring-white        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8 hover:z-10&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white      &gt;&#13;&#10;        jd&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8 hover:z-10&quot;&gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-full ring ring-white        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8 hover:z-10&quot;&gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-full ring ring-white        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8 hover:z-10&quot;&gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-full ring ring-white        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8 hover:z-10&quot;&gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-full ring ring-white        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
              </pre>
            </div>
          </div>

          <!-- Square Avatar Group -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Square Avatar Group
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                The Avatar group renders its children as a stack. Check out code
                for detail of usage.
              </p>
              <div class="mt-5 flex flex-wrap -space-x-2">
                <div class="avatar h-8 w-8 hover:z-10">
                  <img
                    class="rounded-xl ring ring-white"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-8 w-8 hover:z-10">
                  <div
                    class="is-initial rounded-xl bg-info text-xs+ uppercase text-white ring ring-white"
                  >
                    jd
                  </div>
                </div>

                <div class="avatar h-8 w-8 hover:z-10">
                  <img
                    class="rounded-xl ring ring-white"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-8 w-8 hover:z-10">
                  <img
                    class="rounded-xl ring ring-white"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-8 w-8 hover:z-10">
                  <img
                    class="rounded-xl ring ring-white"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>

                <div class="avatar h-8 w-8 hover:z-10">
                  <img
                    class="rounded-xl ring ring-white"
                    src="{{asset('images/200x200.png')}}"
                    alt="avatar"
                  />
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>  
  &lt;div class=&quot;flex flex-wrap -space-x-2&quot;&gt;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8 hover:z-10&quot;&gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-xl ring ring-white        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8 hover:z-10&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;is-initial rounded-xl bg-info text-xs+ uppercase text-white ring ring-white      &gt;&#13;&#10;        jd&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8 hover:z-10&quot;&gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-xl ring ring-white        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8 hover:z-10&quot;&gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-xl ring ring-white        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8 hover:z-10&quot;&gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-xl ring ring-white        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8 hover:z-10&quot;&gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-xl ring ring-white        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;</code>
              </pre>
            </div>
          </div>

          <!-- Border Gradient Avatars -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Gradient Border
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                Border avatars can be gradient colors. Check out code for detail
                of usage.
              </p>
              <div class="inline-space mt-5 flex flex-wrap">
                <div
                  class="flex h-16 w-16 rounded-full bg-gradient-to-r from-sky-400 to-blue-600 p-0.5"
                >
                  <div
                    class="avatar h-full w-full rounded-full bg-white p-[3px]"
                  >
                    <img
                      class="rounded-full"
                      src="{{asset('images/200x200.png')}}"
                      alt="avatar"
                    />
                  </div>
                </div>

                <div
                  class="flex h-16 w-16 rounded-full bg-gradient-to-r from-amber-400 to-orange-600 p-0.5"
                >
                  <div
                    class="avatar h-full w-full rounded-full bg-white p-[3px]"
                  >
                    <img
                      class="rounded-full"
                      src="{{asset('images/200x200.png')}}"
                      alt="avatar"
                    />
                  </div>
                </div>

                <div
                  class="flex h-16 w-16 rounded-full bg-gradient-to-r from-pink-500 to-rose-500 p-0.5"
                >
                  <div
                    class="avatar h-full w-full rounded-full bg-white p-[3px]"
                  >
                    <img
                      class="rounded-full"
                      src="{{asset('images/200x200.png')}}"
                      alt="avatar"
                    />
                  </div>
                </div>

                <div
                  class="flex h-16 w-16 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5"
                >
                  <div
                    class="avatar h-full w-full rounded-full bg-white p-[3px]"
                  >
                    <img
                      class="rounded-full"
                      src="{{asset('images/200x200.png')}}"
                      alt="avatar"
                    />
                    <div
                      class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-error"
                    ></div>
                  </div>
                </div>

                <div
                  class="flex h-16 w-16 rounded-full bg-gradient-to-r from-green-400 to-fuchsia-400 p-0.5"
                >
                  <div
                    class="avatar h-full w-full rounded-full bg-white p-[3px]"
                  >
                    <img
                      class="rounded-full"
                      src="{{asset('images/200x200.png')}}"
                      alt="avatar"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div&#13;&#10;    class=&quot;flex h-16 w-16 rounded-full bg-gradient-to-r from-sky-400 to-blue-600 p-0.5&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;avatar h-full w-full rounded-full bg-white p-[3px]    &gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-full&quot;&#13;&#10;        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div&#13;&#10;    class=&quot;flex h-16 w-16 rounded-full bg-gradient-to-r from-amber-400 to-orange-600 p-0.5&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;avatar h-full w-full rounded-full bg-white p-[3px]    &gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-full&quot;&#13;&#10;        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div&#13;&#10;    class=&quot;flex h-16 w-16 rounded-full bg-gradient-to-r from-pink-500 to-rose-500 p-0.5&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;avatar h-full w-full rounded-full bg-white p-[3px]    &gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-full&quot;&#13;&#10;        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div&#13;&#10;    class=&quot;flex h-16 w-16 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;avatar h-full w-full rounded-full bg-white p-[3px]    &gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-full&quot;&#13;&#10;        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-error      &gt;&lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;&#13;&#10;  &lt;div&#13;&#10;    class=&quot;flex h-16 w-16 rounded-full bg-gradient-to-r from-green-400 to-fuchsia-400 p-0.5&quot;&#13;&#10;  &gt;&#13;&#10;    &lt;div&#13;&#10;      class=&quot;avatar h-full w-full rounded-full bg-white p-[3px]    &gt;&#13;&#10;      &lt;img&#13;&#10;        class=&quot;rounded-full&quot;&#13;&#10;        src=&quot;images/200x200.png&quot;&#13;&#10;        alt=&quot;avatar&quot;&#13;&#10;      /&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;                </code>
               </pre>
            </div>
          </div>

          <!-- Avatar Skeleton -->
          <div class="card px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 lg:text-base"
              >
                Avatar Skeleton
              </h2>
              <label class="flex items-center space-x-2">
                <span class="text-xs text-slate-400">Code</span>
                <input
                  @change="helpers.toggleCode"
                  class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="max-w-2xl">
              <p>
                It is also possible to use a skeleton to preview photos. Check
                out code for detail of usage.
              </p>
              <div class="mt-5 flex animate-pulse flex-wrap -space-x-2">
                <div class="avatar h-8 w-8">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-xs+ uppercase text-white ring ring-white"
                  >
                    <i class="fa fa-user"></i>
                  </div>
                </div>
                <div class="avatar h-8 w-8">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-xs+ text-white ring ring-white"
                  >
                    <i class="fa fa-user"></i>
                  </div>
                </div>
                <div class="avatar h-8 w-8">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-xs+ text-white ring ring-white"
                  >
                    <i class="fa fa-user"></i>
                  </div>
                </div>
                <div class="avatar h-8 w-8">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-xs+ text-white ring ring-white"
                  >
                    <i class="fa fa-user"></i>
                  </div>
                </div>
                <div class="avatar h-8 w-8">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-xs+ text-white ring ring-white"
                  >
                    <i class="fa fa-user"></i>
                  </div>
                </div>
                <div class="avatar h-8 w-8">
                  <div
                    class="is-initial rounded-full bg-slate-200 text-xs+ text-white ring ring-white"
                  >
                    <i class="fa fa-user"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="code-wrapper hidden pt-4">
              <pre
                class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg"
                x-init="hljs.highlightElement($el)"
              >
                <code class="language-html" x-ignore>
  &lt;div class=&quot;flex animate-pulse flex-wrap -space-x-2&quot;&gt;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;is-initial rounded-full bg-slate-200 text-xs+ uppercase text-white ring ring-white      &gt;&#13;&#10;        &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;is-initial rounded-full bg-slate-200 text-xs+ text-white ring ring-white      &gt;&#13;&#10;        &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;is-initial rounded-full bg-slate-200 text-xs+ text-white ring ring-white      &gt;&#13;&#10;        &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;is-initial rounded-full bg-slate-200 text-xs+ text-white ring ring-white      &gt;&#13;&#10;        &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;is-initial rounded-full bg-slate-200 text-xs+ text-white ring ring-white      &gt;&#13;&#10;        &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;    &lt;div class=&quot;avatar h-8 w-8&quot;&gt;&#13;&#10;      &lt;div&#13;&#10;        class=&quot;is-initial rounded-full bg-slate-200 text-xs+ text-white ring ring-white      &gt;&#13;&#10;        &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;&#13;&#10;      &lt;/div&gt;&#13;&#10;    &lt;/div&gt;&#13;&#10;  &lt;/div&gt;&#13;&#10;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </main>
</x-app-layout>
